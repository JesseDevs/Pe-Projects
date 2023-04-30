var header = document.querySelector('header');
const body = document.querySelector('body');

const numberFormatter = Intl.NumberFormat('en-US');

function setCookie() {
	document.cookie = `scrollPosition=${window.scrollY}`;
}

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

	if (header.classList.contains('open-menu') || body.classList.contains('overflow')) {
		if (!event.target.matches('header *')) {
			header.classList.remove('open-menu');
			body.classList.remove('overflow');
		}

		if (event.target.matches('header.open-menu .burger')) {
			header.classList.remove('open-menu');
			body.classList.remove('overflow');
		}
	}

	if (event.target.matches('#top')) {
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		});
	}
});
