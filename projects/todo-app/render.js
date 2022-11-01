export {
    TodoApp,
    Todo,
}

class Todo {
    constructor(id, content, record) {
        this.id = id;
        this.content = content;
        this.complete = false;

        this.dateCreated = new Date();
    }

    toggleComplete() {
        this.complete = !this.complete;
    }

    get isComplete() {
        return (this.complete) ? "complete" : "";
    }

    render() {
        const { id, content, isComplete } = this
        return `
        <li>
            <item-card data-id='${id}' class="${isComplete}">
                <h2> ${content}</h2>
    
                <action-block>
                    <button data-action="remove" >Remove</button>
                    <button data-action="complete">Complete</button>
                </action-block>
    
            </item-card>
        </li>
    `
    }
};

class TodoApp {

    constructor(name) {

        this.name = name;
        this.todos = [];
        this.idCount = 0;
        this.trashList = [];
        this.completedList = [];

        this.$form = document.querySelector('form');
        this.$input = this.$form.querySelector('input');
        this.$output = document.querySelector('output');
        this.$trashCan = document.querySelector("#trashcan");

        this.setupApp();
        this.addEventListeners();
    }

    setupApp() {
        const data = JSON.parse(localStorage.getItem(this.name)) || [];
        data.forEach((todoData) => {
            this.todos = [...this.todos, new Todo(todoData)];

        });
        this.renderList();
    }

    saveToStorage() {
        localStorage.setItem("Todos", JSON.stringify(this.todos));
    }

    removeFromStorage(key) {
        localStorage.removeItem(key);
    }

    add(content) {
        var todo = new Todo(`a${this.idCount++}`, content);

        this.todos = [...this.todos, todo];
        this.renderList(this.todos);
        this.saveToStorage()
    }

    getTodoById(id) {
        return this.todos.find(function (todo) {
            return todo.id == id;
        })
    }

    remove(id) {
        const filtered = this.todos.filter(function (savedTodo) {
            return savedTodo.id != id;
        });

        this.trashList.push(this.getTodoById(id));
        console.log(this.trashList)

        this.todos = [...filtered];
        this.renderList(this.todos);
    }

    complete(id) {

        this.getTodoById(id).toggleComplete();
        this.renderList(this.todos);

    }

    renderList(todos) {
        var template = `<ul>`;

        this.todos.forEach(todo => {
            template += todo.render();
        });

        template += `</ul>`;
        this.$output.innerHTML = template;

    }

    addEventListeners() {
        this.$form.addEventListener('submit', (event) => {
            event.preventDefault();

            this.add(this.$input.value);
            this.$input.value = "";
        });

        this.$output.addEventListener('click', (event) => {
            if (event.target.dataset.action == 'remove') {
                const id = event.target.closest('item-card').dataset.id;
                this.remove(id);
            }

            if (event.target.dataset.action == 'complete') {
                const id = event.target.closest('item-card').dataset.id;
                this.complete(id);
            }
        });

        // this.$trashCan.addEventListener("click", (event) => {
        //     if (event.target.dataset.action == 'trash') {
        //         this.$form.innerHTML = `
        //         <h1 class="roar-voice">Trash Can</h1>
        //         `
        //         this.$output.innerHTML = ""
        //         console.log(this.trashList)
        //         this.renderList(this.trashList);
        //     }
        // })
    }
}
