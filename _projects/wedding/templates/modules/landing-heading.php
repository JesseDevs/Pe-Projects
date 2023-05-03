<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading class='grid-template aurora-bg'>
	<text-content class='title'>
		<h1 class='special-text'>
			<?= $heading ?>
			<div class="contains-ring">
				<?php include('images/ring.php'); ?>
			</div>
		</h1>
		<p class='intro strict-voice'> <?= $section["intro"] ?></p>
	</text-content>

	<figure>
		<picture> <img src="images/chapel.jpg" alt="chapel">
		</picture>
		<figcaption class='caption-rsvp'>
			<p>RSVP Below</p>
		</figcaption>
	</figure>

	<div class="floating-square purple"></div>
	<div class="floating-square blue "></div>
	<div class="floating-square orange"></div>
	<div class="floating-square green"></div>
	<div class="floating-square yellow"></div>

</landing-heading>