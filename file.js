var toggle = document.querySelector('#switch');
const $form = document.querySelector('form');
const $feedback = document.querySelector(".feedback");
const $calculate = document.querySelector('#calculate');
const numberFormatter = Intl.NumberFormat('en-US');

// converting first letter to uppercase
function capitalizeFirstLetter(str) {
    const capitalized = str.charAt(0).toUpperCase() + str.slice(1);

    return capitalized;
}

window.addEventListener('click', function (event) {
    if (event.target.matches('[rel="hamburger"]')) {
        event.preventDefault();

        var header = document.querySelector("header");
        header.classList.toggle("display-menu");
    }

    if (event.target.matches("#switch")) {
        validateform();
    }

});

validateform = function () {
    if (toggle.checked) {
        $form.classList.add("none");

        if ($helloForm) {
            promptHello();
        }

        if ($countForm) {
            promptString();
        }

        if ($quoteForm) {
            promptQuote();
        }

        if ($madlibForm) {
            promptMadlib();
        }

        if ($retireForm) {
            promptRetire();
        }
    } else {
        $form.classList.remove("none");
    }

}

const $helloForm = document.querySelector('#hello');
const $countForm = document.querySelector('#count-characters');
const $quoteForm = document.querySelector('#quote');
const $madlibForm = document.querySelector('#madlib');
const $retireForm = document.querySelector('#retire');

function promptHello() {
    const $nameInput = document.querySelector('#name');
    $helloForm.addEventListener('input', function (event) {

        var name = $nameInput.value;
        let message = '';

        if (name) {
            message = `<p>Hello, <strong>${name}</strong>. Nice to meet you!</p>`;
        } else if (name == '') {
            message = `<p>Oh wait.. we're missing something..</p>`;
        };

        $feedback.innerHTML = `${message}`;

    });
}

function promptString() {
    const $phraseInput = document.querySelector('#phrase');
    $countForm.addEventListener('input', function (event) {

        let string = $phraseInput.value;
        let counter = 0
        if (string == '') {
            message = 'nothing'
        }

        for (i = 0; i < string.length; i++) {
            character = string[i]; // 

            if (character != ' ') {
                counter++;
            }
        }

        var template = `You entered: `;
        var message = 'That phrase has: ';

        $feedback.innerHTML = `
        <p> ${template} <strong> ${string} </strong> </p>
        <p> ${message} <strong> ${counter} </strong> characters. </p>

        `
    });
};

function promptQuote() {
    const $quoteInput = $quoteForm.querySelector("field:nth-of-type(2) input")
    const $authorInput = $quoteForm.querySelector("field:nth-of-type(1) input")

    $quoteForm.addEventListener('input', function (event) {
        let quote = $quoteInput.value;
        let author = $authorInput.value;
        author = capitalizeFirstLetter(author);

        $feedback.innerHTML = `
                <p><strong>${author}</strong> said <strong>“${quote}”</strong> </p>
            `

    })
}

function promptMadlib() {

    const $noun = $madlibForm.querySelector("field:nth-of-type(1) input");
    const $verb = $madlibForm.querySelector("field:nth-of-type(2) input");
    const $adjective = $madlibForm.querySelector("field:nth-of-type(3) input");
    const $adverb = $madlibForm.querySelector("field:nth-of-type(4) input");

    $madlibForm.addEventListener('input', function (event) {

        let noun = $noun.value;
        let verb = $verb.value;
        let adjective = $adjective.value;
        let adverb = $adverb.value;

        if (noun.length == 0) {
            noun = "X"
        }
        if (verb.length == 0) {
            verb = "X"
        }
        if (adjective.length == 0) {
            adjective = "X"
        }
        if (adverb.length == 0) {
            adverb = "X"
        }

        $feedback.innerHTML = `<p><strong>${noun}</strong> is <strong>${verb}</strong> <strong>${adverb}</strong>  while maintaining <strong>${adjective}</strong> poise! </p>`;
    })

}

function promptRetire() {

    const $age = $retireForm.querySelector("field:nth-of-type(1) input");
    const $retire = $retireForm.querySelector("field:nth-of-type(2) input");

    var retirementAge = parseFloat($retire) - parsefloat($age);
    var retireDate = 2015 + retirementAge;

    var message = 'It will be ' + retirementAge + ' years until you can retire in ' + retireDate + '.';

    if (age == '') {
        message = "No age. No retirement."
    } else if (retire == '') {
        message = "We need to plan..."
    }

    alert(message);
    event.preventDefault();
}





function promptMath() {

    var numOne = prompt('Enter your first number.');
    var numTwo = prompt('Enter your second number.');

    numOne = parseInt(numOne);
    numTwo = parseInt(numTwo);

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
    event.preventDefault();

}
