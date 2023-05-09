<script>
	let currentIndex = 0;
	let nextIndex = currentIndex + 1;
	let lastIndex = nextIndex + 1;

	var projectsArray = <?= json_encode($projectsData); ?>;

	function reloadCard() {
		const projectCard = document.querySelector('project-card');

		projectCard.innerHTML = `
	
			<img src="${projectsArray[currentIndex].thumbnail}" alt="" loading='lazy'>
		
			<span class="span-title">${projectsArray[currentIndex]['intro']}</span>
		
			<text-content>
				<h3 class='chant-voice'>${projectsArray[currentIndex].title}</h3>
				<p class="project-detail ">${projectsArray[currentIndex].detail}</p>
				<a class="action-link" href="?page=project&id=${projectsArray[currentIndex].id}">Details!</a>
			</text-content>
		`;
	}

	function teaserCard() {
		const teaserCard = document.querySelector('teaser-card.second');

		teaserCard.innerHTML = `
	
			<img src="${projectsArray[nextIndex].thumbnail}" alt="" loading='lazy'>
			<span class="span-title">${projectsArray[nextIndex]['intro']}</span>
			<text-content>
				<h3 class='chant-voice'>${projectsArray[nextIndex].title}</h3>
			</text-content>
			<button id='second'> </button>
		`;
	}

	function anotherTeaserCard() {
		const teaserCard = document.querySelector('teaser-card.third');

		teaserCard.innerHTML = `
	
			<img src="${projectsArray[lastIndex].thumbnail}" alt="" loading='lazy'>
			<span class="span-title">${projectsArray[lastIndex]['intro']}</span>
			<text-content>
				<h3 class='chant-voice'>${projectsArray[lastIndex].title}</h3>
			</text-content>
			<button id='third'> </button>
		`;
	}

	function releaseCards() {
		reloadCard();
		teaserCard();
		anotherTeaserCard();
	}

	window.addEventListener('DOMContentLoaded', releaseCards);

	window.addEventListener('click', function(event) {
		if (event.target.matches('#next-project-btn')) {
			loadNextProject();
			releaseCards();
		}

		if (event.target.matches('#second')) {
			loadNextProject();
			releaseCards();
		}


		if (event.target.matches('#third')) {
			loadNextProject();
			loadNextProject();
			releaseCards();
		}
	});

	function loadNextProject() {
		currentIndex++;
		nextIndex++;
		lastIndex++;

		if (currentIndex >= projectsArray.length) {
			currentIndex = 0;
		}

		if (nextIndex >= projectsArray.length) {
			nextIndex = 0;
		}

		if (lastIndex >= projectsArray.length) {
			lastIndex = 0;
		}
	}
</script>

<project-section class='grid-template'>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>
		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>

	<project-card class='card-design'></project-card>
	<card-container>

		<teaser-card class='second card-design'>
		</teaser-card>

		<teaser-card class='third card-design'>
		</teaser-card>

	</card-container>

	<button class='action-link' id="next-project-btn">
		NEXT CARD
		<span>
			<svg class="icon-arrow-right">
				<use xlink:href="#icon-arrow-right"></use>
			</svg>
		</span>
	</button>

</project-section>