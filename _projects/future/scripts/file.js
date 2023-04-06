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

var header = document.querySelector('header');
const body = document.querySelector('body');
const numberFormatter = Intl.NumberFormat('en-US');

// converting first letter to uppercase
function capitalizeFirstLetter(str) {
	const capitalized = str.charAt(0).toUpperCase() + str.slice(1);
	return capitalized;
}

window.addEventListener('click', function (event) {
	if (event.target.matches('.burger-btn')) {
		event.preventDefault();

		header.classList.toggle('open-menu');
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
});
