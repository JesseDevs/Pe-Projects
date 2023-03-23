<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading>
	<text-content class='title'>

		<h1 class="roar-voice"><?= $heading ?></h1>



		<p class='intro'> <?= $section["intro"] ?></p>


		<p class="details"><?= $section["details"] ?></p>

	</text-content>

	<picture class="landing-image">
		<div class="overlay"></div>

		<img src=" <?= $section['image'] ?>" alt="comp" loading='lazy'>
	</picture>

	<a class='action-link' href="#contact" onclick="scrollToSection()">Let's Connect</a>

</landing-heading>