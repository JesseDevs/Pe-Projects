import collection from '../data/collection.json' assert { type: 'json' };

const header = document.querySelector('header');
const body = document.querySelector('body');
let card = document.querySelector('card-container');

function generateQuote() {
	const randomItem = collection[Math.floor(Math.random() * collection.length)];

	const adlib = randomItem.adlib ? `<span>${randomItem.adlib}</span>` : '';

	card.innerHTML = `
	
		<picture>
			<img src="${randomItem.art}" alt="cover-art" loading='lazy'>
		</picture>
		
		${adlib}
		
		<text-content>
			<h3>${randomItem.song}: ${randomItem.id}</h3>
			<p>${randomItem.artist}</p>
			<p>${randomItem.song}</p>

			<em>${randomItem.lyrics}</em>
		</text-content>
		`;
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

window.addEventListener('click', function (event) {
	if (event.target.matches('#generator')) {
		generateQuote();
	}
});
