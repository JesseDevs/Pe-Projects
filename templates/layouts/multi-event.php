<?php
$eventData = getJsonData('events');

// print_r(count($eventData));
// foreach ($eventData as $event) {
// 	echo $event['name'];
// }
?>

<script>
	let totalEvents = 0;

	var eventsArr = <?= json_encode($eventData); ?>;

	totalEvents = eventsArr.length;

	function openModal(event) {
		console.log('open');
		console.log(event.name);
	}

	function createEventCards() {
		var articleGrid = document.querySelector('article-grid');
		let carouselClass = 'basic';

		if (eventsArr.length === 1) {
			cardClass = 'event-card-large';
		} else if (eventsArr.length > 1 && eventsArr.length < 5) {
			cardClass = 'event-card-medium';
		} else if (eventsArr.length > 4) {
			cardClass = 'event-card-small';
			carouselClass = 'carousel';
		}

		eventsArr.forEach(function(event) {
			var article = document.createElement('article');

			article.classList.add('event-card');

			articleGrid.classList.add(cardClass);
			articleGrid.classList.add(carouselClass);

			if (eventsArr.length === 1) {

				const detailsHtmlArray = [];
				for (var i = 0; i < event.details.length; i++) {
					detailsHtmlArray.push('<p class="event-detail">' + event.details[i] + '</p>');
				}

				const detailsHtml = detailsHtmlArray.join('');

				article.innerHTML = `
				<div class='main-content'>
					<picture>
						<img src="/images/background/landscape.jpg" alt="" loading='lazy'>
					</picture>

					<text-content>
				      ${detailsHtml}
					</text-content>
				</div>

 		<text-content>
		
      		<h3 class='chant-voice'>${event.name}</h3>
	
			<button class="details-button">Register</button>

      	</text-content>
			`;

			} else {

				article.innerHTML = `
				<picture>
				<img src="/images/background/landscape.jpg" alt="" loading='lazy'>
			</picture>
 		<text-content>
		
      		<h3 class='chant-voice'>${event.name}</h3>
			<p class="event-subtitle">${event.subtitle}</p>
			<button class="details-button">View Details</button>

      	</text-content>
			`;
			}

			var modalButton = article.querySelector('.details-button');
			modalButton.addEventListener('click', function() {
				openModal(event);
			});

			articleGrid.appendChild(article);
		});
	}

	function addEvent() {
		const newEvent = {
			id: totalEvents + 1,
			name: "New Event",
			subtitle: "Any additional event information",
			details: ["Details about the new event."],
			host: [
				"Perpetual Education",
				"Derek"
			],
			date: "August 10th, 2023",
		};

		eventsArr.push(newEvent);

		const articleGrid = document.querySelector('article-grid');
		articleGrid.classList.remove('event-card-large', 'event-card-medium', 'event-card-small', 'carousel');
		articleGrid.innerHTML = '';

		createEventCards();
	}

	window.addEventListener('DOMContentLoaded', function() {
		createEventCards();
	});


	window.addEventListener('click', function(event) {
		if (event.target.matches('.square-button')) {
			console.log('success.')
			addEvent();
		}
	});
</script>

<module>

	<module-header>
		<h2 class='loud-voice'> Upcoming Events </h2>
		<p class='intro-voice'> We 've put in your request and all of that messaging would go here. Please allow x days etc. Also we could make a fun loading animation out of this mark.</p>

		<button class="square-button">Add Event</button>

	</module-header>

	<article-grid>

	</article-grid>
</module>