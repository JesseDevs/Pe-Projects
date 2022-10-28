localStorage.setItem("favoriteColor", "Salmon");

// localStorage.clear();

const color = localStorage.getItem("favoriteColor");
const message = `My favorite color is ${color}`;

const data = localStorage;
data.setItem("myCat", "Tom")

var count = 0;
count++

// data.setItem("score", count);
// const storedCount = data.getItem('score')
// console.log(typeof storedCount == "string")

// data.setItem("score", { score: count });
// const storedCount = data.getItem('score')
// console.log(typeof storedCount == "string")


data.setItem('score', JSON.stringify({ score: count }))
const storedCount = data.getItem('score')

// console.log(storedCount)
// console.log(JSON.parse(storedCount).score);

// stringify = encodes it to a string 
// parse = decodes it back to its original form

data.clear();

//function 2

// save to local storage

function saveToStorage(key, item) {
    if (typeof item !== "string") {
        this.localStorage.setItem(key, JSON.stringify(item));
    }
}

saveToStorage("favoriteColor", { color: "red" });

function grabFromStorage(key) {
    var thing = localStorage.getItem(key);
    return JSON.parse(thing);
}

var test = grabFromStorage("favoriteColor");

console.log(test);