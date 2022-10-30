class Todo {
    constructor(id, content) {
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
}

class TodoApp {

    constructor(name) {
        this.data = localStorage;

        this.name = name;
        this.todos = [];
        this.idCount = 0;
        this.trashList = [];
        this.completedList = [];


        this.$form = document.querySelector('form');
        this.$input = this.$form.querySelector('input');
        this.$output = document.querySelector('output');

        this.initialize();
        this.addEventListeners();
    }

    initialize() {
        if (this.data.getItem("Todos")) {
            var thing = this.data.getItem("Todos");
            this.todos = JSON.parse(thing);

            this.renderList(this.todos);
        } else {
            this.data.setItem('Todos', JSON.stringify(""))
        }

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

        this.trash.push(this.getTodoById(id));

        this.todos = [...filtered];
        this.renderList(this.todos);
    }

    complete(id) {

        this.getTodoById(id).toggleComplete();
        this.renderList(this.todos);

    }

    renderList(todos) {
        console.log(todos);
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

            console.log(this.$input.value)
            this.add(this.$input.value);
            this.$input.value = "";
            console.log('todos:', this.todos);
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
    }
}

const newTodo = new TodoApp();

// function clearAll() {
//     todos = [];
//     renderList(todos);
// }
