import collection from '../data/collection.js';

const header = document.querySelector('header');
const body = document.querySelector('body');
let card = document.querySelector('card-container');
let divSupport = document.querySelector('div-support');

function generateQuote() {
	const randomItem = collection[Math.floor(Math.random() * collection.length)];

	const adlib = randomItem.adlib ? `<span>${randomItem.adlib}</span>` : '';

	card.innerHTML = `
	
		<picture>
			<img src="${randomItem.art}" alt="cover-art" loading='lazy'>
		</picture>
		
		${adlib}
		
		<text-content>
			<h3>${randomItem.song}</h3>
			<p>${randomItem.artist}</p>
		</text-content>

		<p class='lyrics'>
			<em>${randomItem.lyrics}</em>
		</p>
	`;
	// divSupport.style.backgroundImage = `url('${randomItem.art}')`;
}

// converting first letter to uppercase
function capitalizeFirstLetter(str) {
	const capitalized = str.charAt(0).toUpperCase() + str.slice(1);
	return capitalized;
}

// Toggle menu button
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
});

window.addEventListener('click', function (event) {
	if (event.target.matches('#generator')) {
		generateQuote();
	}
});
