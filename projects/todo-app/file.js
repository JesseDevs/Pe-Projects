function print(note = '') {
    console.log(`---------- ${note}`);
    console.log('todos: ', todos);
}

const todos = [];
var count = 0;

function add(content) {
    var todo = {
        id: `a${count++}`,
        content: content,
    };
    todos.push(todo);
    print(`Added ${content}`);
}


function remove(id) {
    print(`Removed ${todos[id].content}`);
    todos.splice(id, 1);
}

function complete(id) {
    todos[id].complete = true;
    print(`Completed ${todos[id].content}`);
}

function update(id, content) {
    todos[id].content = content;
    print(`Updated ${todos[id].content}`);
}

add("Get some more sleep");
add("Go to the gym");
add("Eat some food");

// complete(2);
// remove(2);
update(0, "New Todo");