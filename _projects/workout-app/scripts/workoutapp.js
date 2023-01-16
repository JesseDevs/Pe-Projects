import Workout from "./workout.js";
import Routine from "./routine.js";

class WorkoutApp {

    constructor(name) {

        this.name = name;
        this.routines = [];
        this.workouts = [];
        this.types = ["chest", "back", "legs", "shoulders", "cardio", "core"];

        this.$body = document.querySelector("body")
        this.$form = document.querySelector('form');
        this.$input = this.$form.querySelector('input');
        this.$output = document.querySelector('output');

        this.routineBlock = document.querySelector('#routine-display');
        this.option = document.querySelector("#workoutType");

        this.setupApp();
        this.addEventListeners();
    }

    setupApp() {
        const data = JSON.parse(localStorage.getItem(this.name)) || [];
        data.forEach((workoutData) => {

            this.workouts = [...this.workouts, new Workout(workoutData.data)];
        });

        this.renderLists();
    }

    saveToStorage() {
        localStorage.setItem("Workouts", JSON.stringify(this.workouts, null, 2));
    }

    removeFromStorage(key) {
        localStorage.removeItem(key);
    }

    saveAndUpdate() {
        this.renderLists();
        this.saveToStorage();
    }

    add(content, type) {
        var workout = new Workout({ content: content, type: type });

        this.workouts = [...this.workouts, workout];
        this.saveAndUpdate()
    }

    getWorkoutById(id) {
        return this.workouts.find(function (workout) {
            return workout.data.id == id;
        })
    }

    filterWorkoutByType(type) {
        return this.workouts.filter(function (workout) {
            return workout.data.type == type;
        });
    }

    remove(id) {
        const filtered = this.workouts.filter(function (savedWorkout) {
            return savedWorkout.data.id != id;
        });

        this.workouts = [...filtered];
        this.saveAndUpdate()
        //alert idea
    }

    complete(id) {
        this.getWorkoutById(id).toggleComplete();
        this.saveAndUpdate()
    }

    renderList(workouts) {
        var template = `<ul>`;

        workouts.forEach(workout => {
            template += workout.render();
        });

        template += `</ul>`;
        return template;
    }

    renderLists() {
        var template = ``;

        this.types.forEach(type => {
            const newSet = this.filterWorkoutByType(type);
            if (newSet.length) {
                template += `<list-container>
                    <h3 class='another-voice'>${type} </h3> `
                template += this.renderList(newSet);
                template += `</list-container>`
            }

        })

        this.$output.innerHTML = template;
    }

    renderRoutines(routines, index) {
        console.log(routines)

        if (routines) {
            var template = `<ul>`;

            routines.forEach(routine => {
                console.log(routine);
                template += `
                <li>
            <button class='route-link' data-route="load-routine">Routine ${index}</button>
                </li>    
            `;
            });

            template += `</ul>`;

            this.routineBlock.innerHTML = template;
        }
    }

    addEventListeners() {

        this.$body.addEventListener('click', (event) => {
            if (event.target.dataset.action == 'save') {

                let saveRoutine = document.querySelector("#save-routine-modal");
                let name = saveRoutine.closest("input");

            }
        });

        this.$form.addEventListener('submit', (event) => {
            event.preventDefault();

            var value = this.option.options[this.option.selectedIndex].value;

            this.add(this.$input.value, value);
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

            if (event.target.dataset.action == 'edit') {

                const id = event.target.closest('item-card').dataset.id;
                let workout = this.getWorkoutById(id);
                const item = event.target.closest('item-card');
                item.classList.toggle("editMode");

                let button = item.querySelector(".edit-btn");
                var title = item.querySelector("h4");


                if (item.classList.contains("editMode")) {

                    let oldContent = title.textContent;
                    button.textContent = "Update";

                    title.innerHTML = `<input class='edit-input attention-voice' placeholder='${oldContent}' name='Update' id = 'y' type = "text" autocomplete = "off"> `;
                } else {

                    var editInput = item.querySelector(".edit-input");
                    var value = editInput.value;
                    if (value == "") {
                        value = "-"
                    }

                    workout.data.content = value;
                    title.innerHTML = `${value}`;

                    this.saveAndUpdate();
                }

            }
        });
    }
}

// user makes routines.
// pick which routine youre going to do.
// log the day you picked routine.
// based on complete add data to rack record.
// different view - use data to graph routine workout amounts across the board.

export default WorkoutApp;
