var toggle = document.querySelector('.toggle-checkbox');
var phpForm = document.querySelector('.php');
var jsForm = document.querySelector('.js');

var formIntro = document.querySelector('.form-intro');

function changeForm(event) {
    if (event.target.checked) {
        phpForm.style.display = 'none';
        jsForm.style.display = 'block';
        formIntro.textContent = 'These are little apps that solve everyday problems. Using Javascript to ask you questions. Give them a click!'
    } else {
        jsForm.style.display = 'none';
        phpForm.style.display = 'block';
    }
}

toggle.addEventListener('click', changeForm);

// converting first letter to uppercase
function capitalizeFirstLetter(str) {
    const capitalized = str.charAt(0).toUpperCase() + str.slice(1);

    return capitalized;
}


// button 1
var hello = document.querySelector('.hello');

function promptHello() {
    var name = prompt('What is your name?');
    if (name) {
        var message = "Hello, " + capitalizeFirstLetter(name) + ". nice to meet you!"
    } else if (name == '') {
        var message = "Oh wait.. we're missing something.."
    }

    alert(message);
}

hello.addEventListener('click', promptHello);


// button 2
var stringButton = document.querySelector('.count-string');

function promptString() {
    var string = prompt('Enter a word...')
    // Go through the word and count amount of characters(letters) it takes to make the word.
    if (string == '') {
        string = 'nothing'
    }

    var stringLength = string.length;
    // Tell the user the amount of characters for their word.
    var message = 'You entered ' + string + '. It has ' + stringLength + ' amount of characters!';

    alert(message)
}

stringButton.addEventListener('click', promptString);


// button 3
var authorQuote = document.querySelector('.author-quote');

function promptQuote() {
    var quote = prompt('Enter your favorite quote.');
    var author = prompt('Enter who said this quote.')

    var message = capitalizeFirstLetter(author) + ' said "' + quote + '"!';

    if (quote == '' & author == '') {
        message = "Someone must have said nothing once. Maybe."
    } else if (quote == '') {
        message = capitalizeFirstLetter(author) + ' must have said something, right?';
    } else if (author == '') {
        message = 'Someone must have said "' + quote + '"! Maybe.';
    }

    alert(message)
}

authorQuote.addEventListener('click', promptQuote);



// button 4
var madlib = document.querySelector('.madlib');

function promptMadlib() {

    var noun = prompt('Enter a noun');
    var verb = prompt('Enter a verb');
    var adjective = prompt('Enter a adjective');
    var adverb = prompt('Enter a adverb');

    var message = noun + ' is ' + verb + adverb + ' while maintaining ' + adjective + ' poise!';

    if (noun == '' & verb == '' & adjective == '' & adverb == '') {
        message = "We need to start over..."
    } else if (verb == '') {
        message = "We are missing a verb..";
    } else if (noun == '') {
        message = "We are missing a noun..";
    } else if (adjective == '') {
        message = "We are missing a adjective..";
    } else if (adverb == '') {
        message = "We are missing a adverb..";
    }

    alert(message)
}

madlib.addEventListener('click', promptMadlib);

// button 5
var simpleMath = document.querySelector('.simple-math');

function promptMath() {

    var numOne = prompt('Enter your first number.');
    var numTwo = prompt('Enter your second number.');

    var numOne = parseInt(numOne);
    var numTwo = parseInt(numTwo);

    var multiply = numOne * numTwo;
    var divide = numOne / numTwo;
    var add = numOne + numTwo;
    var sub = numOne - numTwo;

    if (numOne == '') {
        alert('Missing a number.')
    } else if (numTwo == '') {
        alert('Missing a number.')
    } else if (numOne == '' & numTwo == '') {
        alert('Nothing to calculate.')
    } else if (numOne & numTwo) {

        alert([" Multiply = " + multiply, " Division = " + divide, " Addition = " + add, " Subtraction = " + sub]);
    }

}

simpleMath.addEventListener('click', promptMath);


// button 6
var retirment = document.querySelector('.retirment');

function promptRetire() {

    var age = prompt('How old are you?');
    var retire = prompt('At what age do you plan to retire?');

    var retirementAge = parseInt(retire) - parseInt(age);

    var retireDate = 2015 + retirementAge;

    var message = 'It will be ' + retirementAge + ' years until you can retire in ' + retireDate + '.';

    if (age == '') {
        message = "No age. No retirement."
    } else if (retire == '') {
        message = "We need to plan..."
    }

    alert(message);
}

retirment.addEventListener('click', promptRetire);

// button 7
var area = document.querySelector('.area');

function promptArea() {

    var length = prompt('What is the length of the room in feet?');
    var width = prompt('What is the width of the room in feet?');

    var area = parseInt(length) * parseInt(width);
    var meters = area * .09290304;

    var message = 'You entered a dimensions of ' + length + ' feet by ' + width + ' feet. The area is ' + area + ' square feet. That is ' + meters + ' square meters';

    if (length == '' & width == '') {
        message = "Can calculate nothing.."
    } else if (length == '') {
        message = "Missing a side.."
    } else if (width == '') {
        message = "Missing a side.."
    }

    alert(message);
}

area.addEventListener('click', promptArea);