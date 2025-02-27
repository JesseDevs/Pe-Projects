<?php

if ($page !== 'style') {
	$resume = file_get_contents('data/resume.json');
	$resumeData = json_decode($resume, true);

	$goals = file_get_contents('data/goals.json');
	$goalsData = json_decode($goals, true);

	$json = file_get_contents('data/form.json');
	$formData = json_decode($json, true);
}

?>

<main class="page-content <?= $page ?>">
	<portfolio-grid>
		<?php foreach ($pageData['sections'] as $section) { ?>

			<section id="<?= $section['module'] ?>" class="has-a-module has-<?= $section['module'] ?>">

				<inner-column>

					<?php
					include('templates/modules/' . $section["module"] . '.php');
					?>

				</inner-column>
			</section>
		<?php } ?>
	</portfolio-grid>

	<nav class="side-nav">
		<?php foreach ($pageData['sections'] as $section) { ?>
			<a href="#<?= $section['module'] ?>">
				<div class="circle"></div>
			</a>
		<?php } ?>
	</nav>

</main>