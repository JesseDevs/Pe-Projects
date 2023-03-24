<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading class='grid-template'>
	<text-content class='title'>
		<div>
			<h1 class="roar-voice"><?= $heading ?></h1>
			<p class='intro'> <?= $section["intro"] ?></p>
		</div>

		<p class="details"><?= $section["details"] ?></p>


	</text-content>

	<picture class="landing-image">
		<div class="overlay"></div>
		<?php if (isset($section['big-image'])) { ?>
			<source srcset="<?= $section['big-image'] ?>" media="(min-width: 720px)">
		<?php } ?>

		<img src=" <?= $section['image'] ?>" alt="comp" loading='lazy'>
	</picture>

	<a class='action-link' href="#contact" onclick="scrollToSection()">Let's Connect</a>

</landing-heading>