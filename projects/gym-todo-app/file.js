function workoutPlan() {

    this.workouts = [];
    this.idMaker = 0;

    this.add = function (content, type) {
        var workout = {
            id: `a${this.idMaker++}`,
            content: content,
            type: type,
        };
        this.workouts.push(workout);
        // print(`Added ${content} to workouts.`);
    };

    this.remove = function (id) {
        this.workouts.splice(id, 1);
        print(`Removed ${this.workouts[id].content}`);
    };

    this.complete = function (id) {
        this.workouts[id].complete = true;
        print(`Completed ${this.workouts[id].content}`);
    };

    this.update = function (id, content) {
        this.workouts[id].content = content;
        print(`Updated ${this.workouts[id].content} in workouts.`);
    };

    this.filterWorkout = function (value) {
        const newSet = [];
        for (let i = 0; i < this.workouts.length; i++) {
            if (this.workouts[i].type == value) {
                newSet.push(this.workouts[i]);
            }
        }
        return newSet;
    };
}

workoutPlan.prototype.print = function (note = '') {
    console.log(`---------- ${note}`);
    console.log('Workouts: ', this.workouts);
}

let workoutPlanTwo = new workoutPlan;
console.log(workoutPlanTwo)

function workout(name, type) {
    this.name = name;
    this.type = type;
};


// add("Pull-ups", "Pull");
// add("Barbell-rows", "Pull");
// add("Lat Pulls", "Pull");

// add("Flat Bench", "Push");
// add("Incline Bench", "Push");
// add("Shoulder Press", "Push");

// add("Squats", "Legs");
// add("Leg Press", "Legs");
// add("Deadlifts", "Legs");

// pullWorkouts = filterWorkout("Pull");
// pushWorkouts = filterWorkout("Push");
// legWorkouts = filterWorkout("Legs");

// console.log(pullWorkouts);
// console.log(pushWorkouts);
// console.log(legsWorkouts);

class Workout {
    constructor(id, content) {
        this.id = id;
        this.content = content;
        this.complete = false;
        this.type = null;

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

class WorkoutPlanApp {

    constructor(name) {
        this.data = localStorage;

        this.name = name;
        this.workout = [];
        this.idCount = 0;
        this.trashList = [];
        this.completedList = [];


        this.$form = document.querySelector('form');
        this.$input = this.$form.querySelector('input');
        this.$output = document.querySelector('output');
        this.$trashCan = document.querySelector("#trashcan");

        this.initialize();
        this.addEventListeners();
    }

    initialize() {
        if (this.data.getItem("Todos")) {
            var thing = JSON.parse(this.data.getItem("Todos"));
        } else {
            this.todos = this.data.setItem('Todos', JSON.stringify([]))
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

    }
}

const newPlan = new WorkoutPlanApp();

