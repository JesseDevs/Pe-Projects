<?php foreach ($section['items'] as $template) { ?>

	<article class="<?= $template ?>" id="<?= $template ?>">


		<?php
		include('templates/layouts/' . $template . '.php');
		?>

	</article>
<?php } ?>