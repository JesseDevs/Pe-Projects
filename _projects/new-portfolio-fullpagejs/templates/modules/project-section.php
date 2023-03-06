<project-section>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>

		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>
	<div class="horizontal-scrolling">
		<?php
		if ($page == 'home') {
			foreach ($projectsData as $project) { ?>
				<?php if ($project['featured']) { ?>
					<?php include('templates/modules/project-card.php'); ?>
		<?php }
			}
		} ?>

		<?php if ($page == 'projects' or $page == 'style') {
			foreach ($projectsData as $project) {
				include('templates/modules/project-card.php');
			}
		} ?>
	</div>

</project-section>