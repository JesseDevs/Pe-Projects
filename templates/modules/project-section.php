<script>
	let currentIndex = 0;

	var projectsArray = <?= json_encode($projectsData); ?>;

	console.log(projectsArray)

	function reloadCard() {
		const projectCard = document.querySelector('project-card');
		const fadeOutTime = 500;

		projectCard.classList.add('fade-out');

		setTimeout(() => {
			projectCard.innerHTML = `
      	<img src="${projectsArray[currentIndex].thumbnail}" alt="" loading='lazy'>
      	<span class="span-title">${projectsArray[currentIndex]['intro']}</span>
      	<text-content>
      		<h3 class='chant-voice'>${projectsArray[currentIndex].title}</h3>
      		<p class="project-detail ">${projectsArray[currentIndex].detail}</p>
      		<a class="action-link" href="?page=project&id=${projectsArray[currentIndex].id}">Read Timeline</a>
      	</text-content>`;

			projectCard.classList.remove('fade-out');
			projectCard.classList.add('fade-in');


			setTimeout(() => {
				projectCard.classList.remove('fade-in');
			}, fadeOutTime);
		}, fadeOutTime);
	}

	function teaserCard() {
		const teaserContainer = document.querySelector('card-container');
		var pFiles = projectsArray[currentIndex].files;
		var x = 0;
		var template = '<ul>';

		pFiles.forEach((f, i) => {
			if (projectsArray[currentIndex].id === 'CMS') {
				if (i === 2) {
					return;
				}
			}

			if (projectsArray[currentIndex].id === 'APP') {
				if (i === 0) {
					return;
				}
			}

			x++;
			template += `<li>
				<teaser-card class='file-00${x} card-design'>
					<a href='${f.link}' target="project-page">
						<span class="span-title">Project 00${x}</span>
						<text-content>
							<h3 class='chant-voice'>${f.title}</h3>
						</text-content>
					</a>
				</teaser-card>
			</li>`;

		});

		template += '</ul>';
		teaserContainer.innerHTML = template;
	}

	function releaseCards() {
		reloadCard();
		teaserCard();
	}

	window.addEventListener('DOMContentLoaded', releaseCards);

	window.addEventListener('click', function(event) {
		if (event.target.matches('#next-project-btn')) {
			loadNextProject();
			releaseCards();
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

	<project-card class='card-design'></project-card>
	<card-container>

		<teaser-card class='first card-design'>
		</teaser-card>

		<teaser-card class='second card-design'>
		</teaser-card>

		<teaser-card class='third card-design'>
		</teaser-card>

	</card-container>

	<button class='next-btn' id="next-project-btn">
		<svg class="icon-arrow-right">
			<use xlink:href="#icon-arrow-right"></use>
		</svg>
	</button>

</project-section>