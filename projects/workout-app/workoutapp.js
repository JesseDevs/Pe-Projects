import { Workout } from "./workout.js";

class WorkoutApp {

    constructor(name) {

        this.name = name;
        this.workouts = [];
        this.idCount = 0;
        this.types = ["chest", "back", "legs", "shoulders", "cardio"];
        this.completedList = [];

        this.$form = document.querySelector('form');
        this.$input = this.$form.querySelector('input');
        this.$output = document.querySelector('output');
        this.$options = document.querySelector("#workoutType");

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
        var template = `
        `;

        this.types.forEach(type => {
            const newSet = this.filterWorkoutByType(type);
            if (newSet.length) {
                template += `<list-container>
                    <h3 class='strict-voice'>${type} </h3> `
                template += this.renderList(newSet);
                template += `</list-container>`
            }

        })

        this.$output.innerHTML = template;
    }

    addEventListeners() {
        this.$form.addEventListener('submit', (event) => {
            event.preventDefault();

            var value = this.$options.options[this.$options.selectedIndex].value;

            this.add(this.$input.value, value);
            this.$input.value = "";
        });

        this.$output.addEventListener('click', (event) => {
            if (event.target.dataset.action == 'remove') {

                const id = item.dataset.id;
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

                if (item.classList.contains("editMode")) {

                    var title = item.querySelector("h4");
                    let oldContent = title.textContent;

                    title.innerHTML = `<input class='edit-input' placeholder='${oldContent}' name='Update' id = 'y' type = "text" autocomplete = "off"> `;
                } else {
                    var title = item.querySelector("h4");

                    var editInput = item.querySelector(".edit-input");
                    var value = editInput.value;

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
