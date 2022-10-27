function Monster(name, age) {
    this.name = name;
    this.age = age;

    this.roar = function () {
        alert(`${name}!!!!`)
    }
}

const chunky = new Monster("chunky", 15);
chunky.roar();


const todoApp = {

    todos: [],
    idMaker: 0,

    print: function (note = '') {
        console.log(`---------- ${note}`);
        console.log('todos: ', this.todos);
    },

    add: function (content) {
        var todo = {
            id: `a${this.idMaker++}`,
            content: content,
        };
        this.todos = [...this.todos, todo];
        this.print(`Added ${content}`);
    },


    remove: function (id) {
        this.print(`Removed ${this.todos[id].content}`);
        this.todos.splice(id, 1);
    },

    complete: function (id) {
        this.todos[id].complete = true;
        this.print(`Completed ${this.todos[id].content}`);
    },

    update: function (id, content) {
        this.todos[id].content = content;
        this.print(`Updated ${this.todos[id].content}`);
    },

}

todoApp.add("Get some more sleep");
todoApp.add("Go to the gym");
todoApp.add("Eat some food");

// complete(2);
// remove(2);
todoApp.update(0, "New Todo");