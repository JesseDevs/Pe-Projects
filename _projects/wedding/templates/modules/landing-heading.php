<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading class='grid-template aurora-bg'>
	<text-content class='title'>
		<h1 class='special-text'><?= $heading ?></h1>
		<p class='intro'> <?= $section["intro"] ?></p>
	</text-content>

	<figure>
		<picture> <img src="images/chapel.jpg" alt="chapel">
		</picture>
		<figcaption>
			<p>RSVP Below</p>
		</figcaption>
	</figure>

	<div class="floating-square green rectangle"></div>
	<div class="floating-square orange square"></div>

</landing-heading>