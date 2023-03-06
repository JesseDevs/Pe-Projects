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

<main class="page-content <?= $page ?>" id='fullpage'>

	<?php foreach ($pageData['sections'] as $section) { ?>

		<section class=" has-a-module has-<?= $section["module"] ?> vertical-scrolling">
			<inner-column>

				<?php
				include('templates/modules/' . $section["module"] . '.php');
				?>

			</inner-column>
		</section>
	<?php } ?>

</main>