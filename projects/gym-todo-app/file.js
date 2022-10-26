const workoutsApp = {
    workouts: [],

    pushWorkouts: [],
    pullWorkouts: [],
    legWorkouts: [],

    idMaker: 0,

    print: function (note = '') {
        console.log(`---------- ${note}`);
        console.log('Workouts: ', this.workouts);
    },

    add: function (content, type) {
        var workout = {
            id: `a${this.idMaker++}`,
            content: content,
            type: type,
        };
        this.workouts.push(workout);
        // print(`Added ${content} to workouts.`);
    },

    remove: function (id) {
        print(`Removed ${this.workouts[id].content}`);
        this.workouts.splice(id, 1);
    },

    complete: function (id) {
        this.workouts[id].complete = true;
        print(`Completed ${this.workouts[id].content}`);
    },

    update: function (workouts, id, content) {
        this.workouts[id].content = content;
        print(`Updated ${this.workouts[id].content} in workouts.`);
    },

    filterWorkout: function (value) {
        const newSet = [];
        for (let i = 0; i < this.workouts.length; i++) {
            if (this.workouts[i].type == value) {
                newSet.push(this.workouts[i]);
            }
        }
        return newSet;
    },
}

workoutsApp.add("Pull-ups", "Pull");
workoutsApp.add("Barbell-rows", "Pull");
workoutsApp.add("Lat Pulls", "Pull");

workoutsApp.add("Flat Bench", "Push");
workoutsApp.add("Incline Bench", "Push");
workoutsApp.add("Shoulder Press", "Push");

workoutsApp.add("Squats", "Legs");
workoutsApp.add("Leg Press", "Legs");
workoutsApp.add("Deadlifts", "Legs");

workoutsApp.pullWorkouts = workoutsApp.filterWorkout("Pull");
workoutsApp.pushWorkouts = workoutsApp.filterWorkout("Push");
workoutsApp.legWorkouts = workoutsApp.filterWorkout("Legs");

console.log(workoutsApp.pullWorkouts);
console.log(workoutsApp.pushWorkouts);
console.log(workoutsApp.legsWorkouts);