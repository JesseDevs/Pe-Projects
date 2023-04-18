var header = document.querySelector('header');
const body = document.querySelector('body');

const numberFormatter = Intl.NumberFormat('en-US');

const phpBox = document.querySelector('#php');
const jsBox = document.querySelector('#js');
const vueBox = document.querySelector('#vue');

let isJavascript = false;

function scrollToSection() {
	event.preventDefault();
	let destination = document.querySelector('#contact');
	destination.scrollIntoView({
		behavior: 'smooth',
	});
}

function setCookie() {
	document.cookie = `scrollPosition=${window.scrollY}`;
}

// converting first letter to uppercase
function capitalizeFirstLetter(str) {
	const capitalized = str.charAt(0).toUpperCase() + str.slice(1);

	return capitalized;
}

window.addEventListener('click', function (event) {
	if (event.target.matches('[rel="hamburger"]')) {
		event.preventDefault();

		header.classList.toggle('display-menu');
		body.classList.toggle('overflow');
	}

	if (header.classList.contains('display-menu') || body.classList.contains('overflow')) {
		if (!event.target.matches('header *')) {
			header.classList.remove('display-menu');
			body.classList.remove('overflow');
		}

		if (event.target.matches('header.display-menu .burger')) {
			header.classList.remove('display-menu');
			body.classList.remove('overflow');
		}
	}

	if (event.target.matches('#javascript')) {
		toggleJavascript();
		isJavascript = !isJavascript;
	}

	if (event.target.matches('#php')) {
		removeJavascript();
		isJavascript = false;
	}

	if (event.target.matches('#vue')) {
		let vueDestination = document.querySelector('#vue-codepen');
		vueDestination.scrollIntoView({
			behavior: 'smooth',
		});
	}

	if (event.target.matches('#top')) {
		console.log('yes');
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		});
	}
});

window.addEventListener('submit', setCookie);

function toggleJavascript() {
	const buttons = document.querySelectorAll('form-box button');
	buttons.forEach((btn) => {
		btn.classList.toggle('none');
	});

	const formBoxes = document.querySelectorAll('form-box');
	formBoxes.forEach((formBox) => {
		formBox.addEventListener('click', function (e) {
			const formId = e.target.closest('form').id;
			const formFunction = formFunctions[formId];
			const divFeedback = formBox.querySelector('.feedback');

			console.log(formId);
			if (formFunction) {
				formFunction(divFeedback);
			}
		});
	});
}

function removeJavascript() {
	const buttons = document.querySelectorAll('form-box button');
	buttons.forEach((btn) => {
		btn.classList.remove('none');
	});

	const formBoxes = document.querySelectorAll('form-box');
	formBoxes.forEach((formBox) => {
		formBox.removeEventListener('click', function (e) {
			const formId = e.target.closest('form').id;
			const formFunction = formFunctions[formId];
			const divFeedback = formBox.querySelector('.feedback');

			console.log(formId);
			if (formFunction) {
				formFunction(divFeedback);
			}
		});
	});
}

const formFunctions = {
	hello: promptHello,
	count: promptString,
	quoteForm: promptQuote,
	madlib: promptMadlib,
	retire: promptRetire,
	math: promptMath,
	driving: promptDrivingAge,
	interest: promptInterest,
	password: promptPassword,
	paint: promptPaint,
	area: calculateArea,
};

const $helloForm = document.querySelector('#hello');
const $areaForm = document.querySelector('#area');
const $countForm = document.querySelector('#count');
const $quoteForm = document.querySelector('#quote-form');
const $madlibForm = document.querySelector('#madlib');
const $retireForm = document.querySelector('#retire');
const $mathForm = document.querySelector('#math');
const $drivingForm = document.querySelector('#driving');
const $interestForm = document.querySelector('#interest');
const $passwordForm = document.querySelector('#password');
const $paintForm = document.querySelector('#paint');

function promptHello(block) {
	const $nameInput = document.querySelector('#name');
	$helloForm.addEventListener('input', function (event) {
		var name = $nameInput.value;
		let message = '';

		if (name) {
			message = `<p>Hello, <strong>${name}</strong>. Nice to meet you!</p>`;
		} else if (name == '') {
			message = `<p>Oh wait.. we're missing something..</p>`;
		}

		block.innerHTML = `${message}`;
		block.classList.add('confirmation');
	});
}

function promptPaint(block) {
	const $lengthInput = $paintForm.querySelector('form-field:nth-of-type(1) input');
	const $widthInput = $paintForm.querySelector('form-field:nth-of-type(2) input');

	$paintForm.addEventListener('input', function (event) {
		var length = parseInt($lengthInput.value, 10);
		var width = parseInt($widthInput.value, 10);

		var area = length * width;
		var paint = Math.ceil(area / 350);

		var displayArea = numberFormatter.format(area);

		if (isNaN(paint)) {
			paint = 'X';
		}

		if (isNaN(parseInt(displayArea), 10)) {
			displayArea = 'X';
		}

		console.log(displayArea);

		template = `<p>The ceiling of the room is: <strong>${displayArea}</strong><br>
        You'll need: <strong>${paint}</strong> gallons to cover the entire ceiling </p>`;

		block.innerHTML = `${template}`;
		block.classList.add('confirmation');
	});
}

function promptPassword(block) {
	const $usernameInput = $passwordForm.querySelector('form-field:nth-of-type(1) input');
	const $passwordInput = $passwordForm.querySelector('form-field:nth-of-type(2) input');

	$passwordForm.addEventListener('input', function (event) {
		const name = 'JohnDoe';
		const pass = '1020World';
		let username = $usernameInput.value;
		let password = $passwordInput.value;
		let template = ``;

		if (username) {
			template = `Typing...<br>
            Username: ${username} <br>
            Password: Hidden `;
		}

		if (username == name && password == pass) {
			template = `You're logged in! Welcome!`;
		}

		block.innerHTML = `<p>${template}</p>`;
		block.classList.add('confirmation');
	});
}

function calculateArea(block) {
	const $lengthInput = $areaForm.querySelector('#length');
	const $widthInput = $areaForm.querySelector('#width');

	$areaForm.addEventListener('input', function (event) {
		var length = parseInt($lengthInput.value, 10);
		var width = parseInt($widthInput.value, 10);

		var area = parseInt(length) * parseInt(width);
		var displayArea = numberFormatter.format(area);

		if (isNaN(parseInt(length), 10)) {
			length = 'X';
		}

		if (isNaN(parseInt(width), 10)) {
			width = 'X';
		}

		if (isNaN(parseInt(displayArea), 10)) {
			displayArea = 'X';
		}

		let meters = area * 0.09290304;

		meters = numberFormatter.format(meters.toFixed(2));

		if (isNaN(parseInt(meters), 10)) {
			meters = 'X';
		}

		let message = `You entered a dimensions of <strong>${length}</strong> feet by <strong>${width}</strong> feet. The area is <strong>${displayArea}</strong> square feet. That is <strong>${meters}</strong> square meters`;

		if ((length == '') & (width == '')) {
			message = "Can't calculate...";
		}

		block.innerHTML = `<p>${message}</p>`;
		block.classList.add('confirmation');
	});
}

function promptInterest(block) {
	const $principal = $interestForm.querySelector('form-field:nth-of-type(1) input');
	const $rate = $interestForm.querySelector('form-field:nth-of-type(2) input');
	const $years = $interestForm.querySelector('form-field:nth-of-type(3) input');

	$interestForm.addEventListener('input', function (event) {
		let principal = $principal.value;
		let interest = $rate.value;
		let rate = interest / 100;

		let years = $years.value;

		if (years.length == 0) {
			years = 5;
		}

		var amount =
			parseFloat(principal)
				.toFixed(2)
				.replace(/[.,]00$/, '') *
			(1 +
				parseFloat(rate)
					.toFixed(2)
					.replace(/[.,]00$/, '') *
					parseFloat(years)
						.toFixed(2)
						.replace(/[.,]00$/, ''));

		if (isNaN(amount)) {
			amount = 0;
		}

		var template = `<p>After ${years} years at ${interest}% interest, the investment will be worth <strong>${amount}</strong>.</p> `;

		block.innerHTML = `${template}`;
		block.classList.add('confirmation');
	});
}

function promptDrivingAge(block) {
	const $ageInput = $drivingForm.querySelector('form-field input');
	$drivingForm.addEventListener('input', function (event) {
		var age = $ageInput.value;
		console.log(age);
		let message = '';

		if (this.age >= 21) {
			message = `You are ${age} years old, enough to legally drive. There's some more responsibility at this point.`;
		} else if (age < 21 && age >= 16) {
			message = `You are ${age} years old, enough to legally drive. Insurance payments will be through the roof.`;
		} else if (age < 16 && age >= 13) {
			message = `You are ${age} years old. Too young to drive but your time is coming.`;
		} else {
			message = 'You are not old enough to legally drive.';
		}
		block.innerHTML = `${message}`;
		block.classList.add('confirmation');
	});
}

function promptString(block) {
	const $phraseInput = document.querySelector('#phrase');
	$countForm.addEventListener('input', function (event) {
		let string = $phraseInput.value;
		let counter = 0;
		if (string == '') {
			message = 'nothing';
		}

		for (i = 0; i < string.length; i++) {
			character = string[i]; //

			if (character != ' ') {
				counter++;
			}
		}

		var template = `You entered: `;
		var message = 'That phrase has: ';

		block.innerHTML = `
        <p> ${template} <strong> ${string} </strong> </p>
        <p> ${message} <strong> ${counter} </strong> characters. </p>
        `;
		block.classList.add('confirmation');
	});
}

function promptQuote(block) {
	const $quoteInput = $quoteForm.querySelector('form-field:nth-of-type(2) input');
	const $authorInput = $quoteForm.querySelector('form-field:nth-of-type(1) input');

	$quoteForm.addEventListener('input', function (event) {
		let quote = $quoteInput.value;
		let author = $authorInput.value;
		author = capitalizeFirstLetter(author);

		block.innerHTML = `
        <p><strong>${author}</strong> said <strong>“${quote}”</strong> </p>
        `;
		block.classList.add('confirmation');
	});
}

function promptMadlib(block) {
	const $noun = $madlibForm.querySelector('form-field:nth-of-type(1) input');
	const $verb = $madlibForm.querySelector('form-field:nth-of-type(2) input');
	const $adjective = $madlibForm.querySelector('form-field:nth-of-type(3) input');
	const $adverb = $madlibForm.querySelector('form-field:nth-of-type(4) input');

	$madlibForm.addEventListener('input', function (event) {
		let noun = $noun.value;
		let verb = $verb.value;
		let adjective = $adjective.value;
		let adverb = $adverb.value;

		if (noun.length == 0) {
			noun = 'X';
		}
		if (verb.length == 0) {
			verb = 'X';
		}
		if (adjective.length == 0) {
			adjective = 'X';
		}
		if (adverb.length == 0) {
			adverb = 'X';
		}

		block.innerHTML = `<p><strong>${noun}</strong> is <strong>${verb}</strong> <strong>${adverb}</strong>  while maintaining <strong>${adjective}</strong> poise! </p>`;
		block.classList.add('confirmation');
	});
}

function promptRetire(block) {
	let date = new Date();
	var currentYear = date.getFullYear();

	const $age = $retireForm.querySelector('form-field:nth-of-type(1) input');
	const $retire = $retireForm.querySelector('form-field:nth-of-type(2) input');

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
			template = `<p>No age. No retirement.</p>`;
		} else if (retire == '') {
			template = `<p>We need to plan...</p>`;
		}

		block.innerHTML = template;
		block.classList.add('confirmation');
	});
}

function promptMath(block) {
	const $numOne = $mathForm.querySelector('form-field:nth-of-type(1) input');
	const $numTwo = $mathForm.querySelector('form-field:nth-of-type(2) input');

	$mathForm.addEventListener('input', function (event) {
		let numOne = $numOne.value;
		let numTwo = $numTwo.value;

		numOne = parseFloat(numOne)
			.toFixed(2)
			.replace(/[.,]00$/, '');
		numTwo = parseFloat(numTwo)
			.toFixed(2)
			.replace(/[.,]00$/, '');

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

		multiply = parseFloat(multiply)
			.toFixed(2)
			.replace(/[.,]00$/, '');
		add = parseFloat(add)
			.toFixed(2)
			.replace(/[.,]00$/, '');
		sub = parseFloat(sub)
			.toFixed(2)
			.replace(/[.,]00$/, '');
		divide = parseFloat(divide)
			.toFixed(2)
			.replace(/[.,]00$/, '');

		var template = `
        <p>${numOne} + ${numTwo} = <strong>${add}</strong></p>
        <p>${numOne} - ${numTwo} = <strong>${sub}</strong></p>
        <p>${numOne} x ${numTwo} = <strong>${multiply}</strong></p>
        <p>${numOne} / ${numTwo} = <strong>${divide}</strong></p>
        `;

		block.innerHTML = template;
		block.classList.add('confirmation');
	});
}

// GSAP

const showAnim = gsap
	.from('.main-tool-bar', {
		yPercent: -100,
		paused: true,
		duration: 0.2,
	})
	.progress(1);

ScrollTrigger.create({
	start: 'top top',
	end: 99999,
	onUpdate: (self) => {
		self.direction === -1 ? showAnim.play() : showAnim.reverse();
	},
});

function animateFrom(elem, direction) {
	direction = direction || 1;
	var x = 0,
		y = direction * 100;
	if (elem.classList.contains('gs_reveal_fromLeft')) {
		x = -100;
		y = 0;
	} else if (elem.classList.contains('gs_reveal_fromRight')) {
		x = 100;
		y = 0;
	}
	elem.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
	elem.style.opacity = '0';
	gsap.fromTo(
		elem,
		{ x: x, y: y, autoAlpha: 0 },
		{
			duration: 2,
			x: 0,
			y: 0,
			autoAlpha: 1,
			ease: 'expo',
			overwrite: 'auto',
		},
	);
}

function hide(elem) {
	gsap.set(elem, { autoAlpha: 0 });
}

document.addEventListener('DOMContentLoaded', function () {
	gsap.registerPlugin(ScrollTrigger);

	gsap.utils.toArray('.gs_reveal').forEach(function (elem) {
		hide(elem); // assure that the element is hidden when scrolled into view

		ScrollTrigger.create({
			trigger: elem,
			onEnter: function () {
				animateFrom(elem);
			},
			onEnterBack: function () {
				animateFrom(elem, -1);
			},
			onLeave: function () {
				hide(elem);
			}, // assure that the element is hidden when scrolled into view
		});
	});
});
