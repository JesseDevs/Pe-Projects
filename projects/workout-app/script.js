import WorkoutApp from "./workoutapp.js";

const workoutApp = new WorkoutApp("Workouts");


function renderPage(template) {
    outlet.innerHTML = template;
}

