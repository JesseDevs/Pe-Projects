console.clear();

const ifYouWant = new Vue({
    el: "#vue-app-context", // this is the scope it will 'watch'

    data: function () { // "live" (watched for changes/updated) data
        return {
            username: "",
            message: "",
            outputStyle: "none",
        };
    },

    methods: {
        update(event) {
            event.preventDefault();
            if (this.username) {
                this.outputStyle = "yay";
                this.message = `Hello, ${this.username}, nice to meet you!`;
            } else {
                this.outputStyle = "nay";
                this.message = "Please enter your name";
            }
        }
    },

    computed: {
        anAutomaticallUpdatedProperty() {
            // mmmmm
        }
    },

});

const drive = new Vue({
    el: "#drive-app", // this is the scope it will 'watch'

    data: function () {
        // "live" (watched for changes/updated) data
        return {
            age: "",
            message: "",
            outputStyle: "none"
        };
    },

    methods: {
        update(event) {
            event.preventDefault();
            if (this.age >= 16) {
                this.something = "Yes."
                this.outputStyle = "yay";
                this.message = `You are ${this.age} years old, enough to legally drive.`;
            } else {
                this.something = "..."
                this.outputStyle = "nay";
                this.message = "You are not old enough to legally drive.";
            }
        }
    }
});

const area = new Vue({
    el: "#area-app",

    data: function () {
        return {
            length: "",
            width: "",
            message: "",
            outputStyle: "none"
        };
    },

    methods: {
        update(event) {
            event.preventDefault();
            if (this.length && this.width) {

                var area = parseInt(this.length) * parseInt(this.width);
                this.outputStyle = "yay";
                this.message = `The area of a room with those dimensions is ${area} feet.`;
            } else {
                this.outputStyle = "nay";
                this.message = "Nope. Try again";
            }
        }
    }
});

const count = new Vue({
    el: "#count-string-app",

    data: function () {
        return {
            phrase: "",
            message: "",
            outputStyle: "none"
        };
    },

    methods: {
        update(event) {
            event.preventDefault();
            if (this.phrase) {

                var count = this.countString(this.phrase);

                this.outputStyle = "yay";
                this.message = `The phrase ${this.phrase} has ${count} characters.`;

            } else {
                this.outputStyle = "nay";
                this.message = "Nope. Try again";
            }
        },

        countString(string) {
            let counter = 0;

            for (i = 0; i < string.length; i++) {

                let character = string[i]; // 

                if (character != ' ') {
                    counter++;
                }
            }

            return counter;
        }
    }
});

const interest = new Vue({
    el: "#interest-app",

    data: function () {
        return {
            principal: "",
            interest: "",
            time: "",
            message: "",
            outputStyle: "none"
        };
    },

    methods: {
        update(event) {
            event.preventDefault();
            if (this.principal && this.interest && this.time) {

                var amount = this.calculate(this.principal, this.time, this.interest)

                this.outputStyle = "yay";
                this.message = `After ${this.time} years at ${this.interest}% interest, the investment will be worth ${amount}.`;

            } else {
                this.outputStyle = "nay";
                this.message = "Nope. Try again";
            }
        },

        calculate(x, y, z) {

            let rate = parseInt(z) / 100;

            var amount = parseFloat(x).toFixed(2).replace(/[.,]00$/, "") * (1 + (parseFloat(rate).toFixed(2).replace(/[.,]00$/, "") * parseFloat(y).toFixed(2).replace(/[.,]00$/, "")));

            return amount;
        }
    }
});

const madlib = new Vue({
    el: "#madlib-app", // this is the scope it will 'watch'

    data: function () {
        // "live" (watched for changes/updated) data
        return {
            noun: "",
            verb: "",
            adverb: "",
            adjective: "",
            message: "",
            outputStyle: "none"
        };
    },

    methods: {
        update(event) {
            event.preventDefault();
            if (this.noun && this.verb && this.adverb && this.adjective) {
                this.outputStyle = "yay";
                this.message = `${this.noun} is ${this.verb} ${this.adverb}  while maintaining ${this.adjective} poise!`;
            } else {
                this.outputStyle = "nay";
                this.message = "Nope. Try again";
            }
        }
    }
});

const paint = new Vue({
    el: "#paint-app",

    data: function () {
        return {
            length: "",
            width: "",
            message: "",
            outputStyle: "none"
        };
    },

    methods: {
        update(event) {
            event.preventDefault();
            if (this.length && this.width) {

                var area = parseInt(this.length) * parseInt(this.width);
                var paint = Math.ceil(area / 350);

                this.outputStyle = "yay";
                this.message = `The ceiling of the room is ${area} feet. You'll need ${paint} gallons to cover the entire ceiling`;

            } else {
                this.outputStyle = "nay";
                this.message = "Nope. Try again";
            }
        }
    }
});


const login = new Vue({
    el: "#login-app",

    data: function () {
        return {
            username: "",
            password: "",
            message: "",
            outputStyle: "none"
        };
    },

    methods: {
        update(event) {
            event.preventDefault();


            let user = $usernameInput.value;
            let pass = $passwordInput.value;

            if (this.username == user && this.password == pass) {

                this.outputStyle = "yay";
                this.message = `You're logged in! Welcome!`;

            } else {
                this.outputStyle = "nay";
                this.message = "Wrong Something..";
            }

        }
    }
});