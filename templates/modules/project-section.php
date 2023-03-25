<script>
	let currentIndex = 0;
	var projectsArray = <?= json_encode($projectsData); ?>;
	console.log(projectsArray);

	function reloadCard() {
		const projectCard = document.querySelector('project-card');

		projectCard.innerHTML = `
			<picture class='project-thumbnail'>
				<img src="${projectsArray[currentIndex].thumbnail}" alt="" loading='lazy'>
							<button id="next-project-btn">&#10132;</button>
			</picture>
			<text-content>
				<h3 class='chant-voice'>${projectsArray[currentIndex].title}</h3>
				<span class="span-title">${projectsArray[currentIndex]['intro']}</span>
				<p class="project-detail ">${projectsArray[currentIndex].detail}</p>
			</text-content>
			<div class="skills">
				${projectsArray[currentIndex].skills.map(skill => `<p class="small-voice">${skill}</p>`).join('')}
			</div>
		
			<a class="action-link" href="${projectsArray[currentIndex].links[0].link}">Click!</a>


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
		console.log(currentIndex)
	}
</script>

<project-section class='grid-template'>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>
		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>

	<project-card></project-card>
</project-section>