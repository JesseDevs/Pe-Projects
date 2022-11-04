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

    add(content, type) {
        var workout = new Workout({ content: content, type: type });

        this.workouts = [...this.workouts, workout];

        this.renderLists()
        this.saveToStorage()
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
        this.renderLists();
        //alert idea
    }

    complete(id) {
        this.getWorkoutById(id).toggleComplete();
        this.renderLists();
        this.saveToStorage();
    }

    renderList(workouts) {
        var template = `<list-container>
                            <ul>`;

        workouts.forEach(workout => {
            template += workout.render();
        });

        template += `</list-container>
        </ul>`;
        return template;
    }

    renderLists() {
        var template = `<section>
        `;

        this.types.forEach(type => {
            const newSet = this.filterWorkoutByType(type);
            if (newSet.length) {
                template += `<h1>${type} </h1>`
                template += this.renderList(newSet);
            }

        })

        template += `</section>`;
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

// user makes routines.
// pick which routine youre going to do.
// log the day you picked routine.
// based on complete add data to rack record.
// different view - use data to graph routine workout amounts across the board.

export default WorkoutApp;
