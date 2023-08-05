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

				const detailsHtml = event.details.map(detail => `<p class="event-detail">${detail}</p>`).join('');

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
	
			<button class="details-button">View Details</button>

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

	window.addEventListener('DOMContentLoaded', function() {
		createEventCards();
	});
</script>

<module>

	<module-header>
		<h2 class='loud-voice'> Upcoming Events </h2>
		<p class='intro-voice'> We 've put in your request and all of that messaging would go here. Please allow x days etc. Also we could make a fun loading animation out of this mark.</p>
	</module-header>

	<article-grid>

	</article-grid>
</module>