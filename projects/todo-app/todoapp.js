import { Todo } from "./todo.js";

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
        if (!this.todos.length) {
            this.add("Create a Todo");
        }
    }

    setupApp() {
        const data = JSON.parse(localStorage.getItem(this.name)) || [];
        data.forEach((todoData) => {
            this.todos = [...this.todos, new Todo(todoData.data)];

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
        var todo = new Todo({ content: content });

        this.todos = [...this.todos, todo];
        this.renderList(this.todos);
        this.saveToStorage()
    }

    getTodoById(id) {
        return this.todos.find(function (todo) {
            return todo.data.id == id;
        })
    }

    remove(id) {
        const filtered = this.todos.filter(function (savedTodo) {
            return savedTodo.data.id != id;
        });

        // this.trashList.push(this.getTodoById(id));
        // console.log(this.trashList)

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

export default TodoApp;
