<about-card class='grid-template'>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>
		<p class='intro'><?= $section['intro']; ?></p>


		<?php
		foreach ($section['details'] as $detail) {
		?>

			<p class='about-content'> <?= $detail ?></p>
		<?php } ?>

	</text-content>
	<?php
	if ($page == "home") { ?>

		<action-links>
			<a class="action-link" href='/about' />More...</a>
			<a class="action-link" href='https://jessedevs.substack.com' />My blog</a>
		</action-links>

	<?php } ?>

	<div class="image-container small-image-support gs_reveal gs_reveal_fromRight">
		<picture class="about-image">
			<?php foreach ($section['images'] as $image) { ?>

				<img src="<?= $image ?>" alt="Me" loading='lazy'>

			<?php } ?>
		</picture>
	</div>

	<div class="image-container gs_reveal gs_reveal_fromRight">
		<picture class="about-image">
			<?php foreach ($section['images'] as $image) { ?>

				<img src="<?= $image ?>" alt="Me" loading='lazy'>

			<?php } ?>
		</picture>
	</div>


</about-card>