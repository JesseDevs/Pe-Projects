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

        this.$chest = [];
        this.$back = [];
        this.$legs = [];
        this.$shoulders = [];
        this.$cardio = [];

        this.setupApp();
        this.addEventListeners();
    }

    setupApp() {
        const data = JSON.parse(localStorage.getItem(this.name)) || [];
        data.forEach((workoutData) => {
            this.workouts = [...this.workouts, new Workout(workoutData.data)];

            this.filterWorkoutByType(type);

        });
        this.renderList();
    }

    saveToStorage() {
        localStorage.setItem("Chest", JSON.stringify(this.$chest));
        localStorage.setItem("Back", JSON.stringify(this.$back));
        localStorage.setItem("Legs", JSON.stringify(this.$legs));
        localStorage.setItem("Shoulders", JSON.stringify(this.$shoulders));
        localStorage.setItem("Cardio", JSON.stringify(this.$cardio));
    }

    removeFromStorage(key) {
        localStorage.removeItem(key);
    }

    add(content, type) {
        var workout = new Workout({ content: content, type: type });

        this.workouts = [...this.workouts, workout];
        this.filterWorkoutByType(type);

        this.renderList(this.$chest);
        this.renderList(this.$back);
        this.renderList(this.$legs);
        this.renderList(this.$shoulders);
        this.renderList(this.$cardio);

        this.saveToStorage()
    }

    getWorkoutById(id) {
        return this.workouts.find(function (workout) {
            return workoutData.data.id == id;
        })
    }

    filterWorkoutByType(type) {
        const reps = this.workouts.filter(function (typeOfWorkout) {
            return typeOfWorkout.data.type == type;
        });

        if (type == "chest") {
            this.$chest = [...reps];

        } else if (type == "back") {
            this.$back = [...reps];

        } else if (type == "legs") {
            this.$legs = [...reps];

        } else if (type == "shoulders") {
            this.$shoulders = [...reps];

        } else if (type == "cardio") {
            this.$cardio = [...reps];
        } else {
            this.workouts = [...reps];
        }

        this.renderList(this.workouts);
    }

    remove(id) {
        const filtered = this.workouts.filter(function (savedWorkout) {
            return savedWorkout.data.id != id;
        });

        this.workouts = [...filtered];
        this.renderList(this.workouts);
    }

    complete(id) {

        this.getWorkoutById(id).toggleComplete();
        this.renderList(this.workouts);

    }

    renderList(array) {
        var template = `<ul>`;

        this.workouts.forEach(workout => {
            template += workout.render();
        });

        template += `</ul>`;
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

export default WorkoutApp;
