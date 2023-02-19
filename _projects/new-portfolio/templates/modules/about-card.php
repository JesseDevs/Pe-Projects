<about-card>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>
		<p class='intro'><?= $section['intro']; ?></p>


		<?php
		foreach ($section['details'] as $detail) {
		?>

			<p class='about-content'> <?= $detail ?></p>
		<?php } ?>

		<a class="about-blog" href=https://jessedevs.substack.com />Follow my journey!</a>

	</text-content>
	<div class="image-container gs_reveal gs_reveal_fromRight">
		<picture class="about-image">
			<?php foreach ($section['images'] as $image) { ?>

				<img src="<?= $image ?>" alt="Me" loading='lazy'>

			<?php } ?>
		</picture>
	</div>
</about-card>