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
    const todo = {
        id: `a${idCount++}`,
        content,
        complete: false
    }

    todos = [...todos, todo];
    renderTodos(todos);
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
    renderTodos(todos);
    removeFromStorage(id);

    saveToStorage("Trashcan", trash);
}

function complete(id) {
    for (let i = 0; i < todos.length; i++) {
        if (todos[i].id == id) {
            todos[i].complete = true;
            saveToStorage(todos[i].id, todos[i])
        }
    }
    renderTodos(todos);

}

function clearAll() {
    todos = [];
    renderTodos(todos);
}

function renderTodo(todo) {
    return `
    <li>
        <todo-card data-id='${todo.id}' class="${todo.complete ? "complete" : ""}">
            <h2> ${todo.content}</h2>

            <action-block>
                <button data-action="remove" >Remove</button>
                <button data-action="complete">Complete</button>
            </action-block>
        </todo-card>
    </li>
`
}

function renderTodos(todos) {
    var template = `<ul>`;
    todos.forEach(todo => {
        template += renderTodo(todo);
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
        const id = event.target.closest('todo-card').dataset.id;
        remove(id);
    }

    if (event.target.dataset.action == 'complete') {
        const id = event.target.closest('todo-card').dataset.id;
        complete(id);
    }
});