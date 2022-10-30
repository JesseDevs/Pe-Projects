function Monster(name, age) {
    this.name = name;
    this.age = age;

    this.roar = function () {
        alert(`${name}!!!!`)
    }

    //returns this;
    //for example returns chunky as an object
}

const chunky = new Monster("chunky", 15);
chunky.roar();

Monster.prototype.whisper = function () {
    console.log(`...hi my name is ${this.name}`);
}

chunky.whisper();
console.log(chunky)



function saveToStorage(key, item) {
    if (typeof item !== "string") {
        this.localStorage.setItem(key, JSON.stringify(item));
    }
}

saveToStorage("favoriteColor", { color: "red" });

function grabFromStorage(key) {
    var thing = localStorage.getItem(key);
    return JSON.parse(thing);
}

function initialize() {
    if (data.getItem('game')) { //local storage is setup
        // great
    } else {
        data.setItem('game', JSON.stringify({ score: 0 }))
    }
}


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


let todos = [];
let idCount = 0;
let trash = []

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');

function saveToStorage(key, item) {
    this.localStorage.setItem(key, JSON.stringify(item));
}

function removeFromStorage(key) {
    this.localStorage.removeItem(key);
}

function add(content) {
    var todo = new Todo(`a${idCount++}`, content);

    todos = [...todos, todo];
    renderList(todos);
    saveToStorage(todo.id, todo)
}

function remove(id) {
    const filtered = todos.filter(function (todo) {
        return todo.id != id;
    });

    for (i = 0; i < todos.length; i++) {
        if (todos[i].id == id) {
            trash.push(todos[i]);
        }
    }

    todos = [...filtered];
    renderList(todos);
    removeFromStorage(id);

    saveToStorage("Trashcan", trash);
}

function complete(id) {
    for (let i = 0; i < todos.length; i++) {
        if (todos[i].id == id) {
            todos[i].complete = !todos[i].complete;
            saveToStorage(todos[i].id, todos[i])
        }
    }
    renderList(todos);

}

function clearAll() {
    todos = [];
    renderList(todos);
}

function render(todo) {
    return `
    <li>
        <item-card data-id='${todo.id}' class="${todo.isComplete}">
            <h2> ${todo.content}</h2>

            <action-block>
                <button data-action="remove" >Remove</button>
                <button data-action="complete">Complete</button>
            </action-block>

            <span> ${todo.fullDate} </span>
        </item-card>
    </li>
`
}

function renderList(todos) {
    var template = `<ul>`;
    todos.forEach(todo => {
        template += render(todo);
    });
    template += `</ul>`;
    $output.innerHTML = template;
}


$form.addEventListener('submit', function (event) {
    event.preventDefault();

    add($input.value);
    $input.value = "";
    console.log('todos:', todos);
});

$output.addEventListener('click', function (event) {
    if (event.target.dataset.action == 'remove') {
        const id = event.target.closest('item-card').dataset.id;
        remove(id);
    }

    if (event.target.dataset.action == 'complete') {
        const id = event.target.closest('item-card').dataset.id;
        complete(id);
    }
});