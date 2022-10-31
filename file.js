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

        if ($mathForm) {
            promptMath();
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
const $mathForm = document.querySelector('#math');

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

    let date = new Date();
    var currentYear = date.getFullYear();

    const $age = $retireForm.querySelector("field:nth-of-type(1) input");
    const $retire = $retireForm.querySelector("field:nth-of-type(2) input");

    $retireForm.addEventListener('input', function (event) {
        var age = $age.value;
        var retire = $retire.value;

        var ageDifference = parseFloat(retire) - parseFloat(age);
        var retireYear = currentYear + ageDifference;

        let template = `<p>
        <strong>${ageDifference}</strong> years left until you can retire.<br> It's <strong>${currentYear}</strong>, so you can retire in <strong>${retireYear}</strong>.
        </p>
        `;

        if (age == '') {
            template = "No age. No retirement."
        } else if (retire == '') {
            template = "We need to plan..."
        }

        $feedback.innerHTML = template;
    })
}

function promptMath() {

    const $numOne = $mathForm.querySelector("field:nth-of-type(1) input");
    const $numTwo = $mathForm.querySelector("field:nth-of-type(2) input");


    $mathForm.addEventListener('input', function (event) {

        let numOne = $numOne.value;
        let numTwo = $numTwo.value;

        numOne = parseFloat(numOne).toFixed(2).replace(/[.,]00$/, "");
        numTwo = parseFloat(numTwo).toFixed(2).replace(/[.,]00$/, "");

        if (isNaN(numOne)) {
            numOne = 0;
        }

        if (isNaN(numTwo)) {
            numTwo = 0;
        }
        var multiply = parseFloat(numOne) * parseFloat(numTwo);
        var divide = parseFloat(numOne) / parseFloat(numTwo);
        var add = parseFloat(numOne) + parseFloat(numTwo);
        var sub = parseFloat(numOne) - parseFloat(numTwo);

        multiply = parseFloat(multiply).toFixed(2).replace(/[.,]00$/, "");
        add = parseFloat(add).toFixed(2).replace(/[.,]00$/, "");
        sub = parseFloat(sub).toFixed(2).replace(/[.,]00$/, "");
        divide = parseFloat(divide).toFixed(2).replace(/[.,]00$/, "");

        var template = `
    <p>${numOne} + ${numTwo} = <strong>${add}</strong></p>
    <p>${numOne} - ${numTwo} = <strong>${sub}</strong></p>
    <p>${numOne} x ${numTwo} = <strong>${multiply}</strong></p>
    <p>${numOne} / ${numTwo} = <strong>${divide}</strong></p>
    `;

        $feedback.innerHTML = template;
    })
}
