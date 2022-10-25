console.clear();

function print(note = '') {
    console.log(`---------- ${note}`);
    console.log('Workouts: ', workouts);
}

const workouts = [];
var count = 0;
console.log(workouts)

function add(content, type) {
    var workout = {
        id: `a${count++}`,
        content: content,
        type: type,
    };
    workouts.push(workout);
    // print(`Added ${content} to workouts.`);
}


function remove(id) {
    print(`Removed ${workouts[id].content}`);
    workouts.splice(id, 1);
}

function complete(id) {
    workouts[id].complete = true;
    print(`Completed ${workouts[id].content}`);
}

function update(workouts, id, content) {
    workouts[id].content = content;
    print(`Updated ${workouts[id].content} in workouts.`);
}

add("Pull-ups", "Pull");
add("Barbell-rows", "Pull");
add("Lat Pulls", "Pull");

add("Flat Bench", "Push");
add("Incline Bench", "Push");
add("Shoulder Press", "Push");

add("Squats", "Legs");
add("Leg Press", "Legs");
add("Deadlifts", "Legs");

function filterWorkout(array, value) {
    for (let i = 0; i < workouts.length; i++) {
        if (workouts[i].type == value) {
            array.push(workouts[i]);
        }
    }
}

const pushWorkouts = [];
const pullWorkouts = [];
const legWorkouts = [];

filterWorkout(pushWorkouts, "Push");
filterWorkout(pullWorkouts, "Pull");
filterWorkout(legWorkouts, "Legs");

console.log(pushWorkouts);
console.log(pullWorkouts);
console.log(legWorkouts);