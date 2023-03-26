<script>
	let currentIndex = 0;
	var projectsArray = <?= json_encode($projectsData); ?>;

	function reloadCard() {
		const projectCard = document.querySelector('project-card');

		projectCard.innerHTML = `
	
			<img src="${projectsArray[currentIndex].thumbnail}" alt="" loading='lazy'>
		
			<span class="span-title">${projectsArray[currentIndex]['intro']}</span>
		
			<text-content>
				<h3 class='chant-voice'>${projectsArray[currentIndex].title}</h3>
				<p class="project-detail ">${projectsArray[currentIndex].detail}</p>
				<a class="action-link" href="${projectsArray[currentIndex].links[0].link}">Click!</a>
			</text-content>
		`;
	}

	window.addEventListener('DOMContentLoaded', function() {
		reloadCard();
	});

	window.addEventListener('click', function(event) {
		if (event.target.matches('#next-project-btn')) {
			loadNextProject();
			reloadCard();
		}
	});

	function loadNextProject() {
		currentIndex++;

		if (currentIndex >= projectsArray.length) {
			currentIndex = 0;
		}
	}
</script>

<project-section class='grid-template'>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>
		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>

	<project-card></project-card>

	<button class='action-link' id="next-project-btn">
		Next
		<span>
			<svg class="icon-arrow-right">
				<use xlink:href="#icon-arrow-right"></use>
			</svg>
		</span>
	</button>

</project-section>