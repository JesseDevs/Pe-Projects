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