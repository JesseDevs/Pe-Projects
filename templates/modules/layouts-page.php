<?php foreach ($section['items'] as $template) { ?>

	<article class="<?= $template ?>">


		<?php
		include('templates/layouts/' . $template . '.php');
		?>

	</article>
<?php } ?>