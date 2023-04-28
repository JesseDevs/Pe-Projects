<main class="page-content <?= $page ?>">
	<?php foreach ($pageData['sections'] as $section) { ?>
		<section id="<?= $section['module'] ?>" class="has-a-module has-<?= $section['module'] ?>">

			<inner-column>

				<?php
				include('templates/modules/' . $section["module"] . '.php');
				?>

			</inner-column>
		</section>
	<?php } ?>

</main>