<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading class='grid-template aurora-bg'>
	<text-content class='title'>
		<h1><?= $heading ?></h1>
		<p class='intro'> <?= $section["intro"] ?></p>
	</text-content>

	<div class='info-block'>

		<h2 class='attention-voice pro'>
			When & Where?
		</h2>
		<p>
			Old Town Wedding & Event Center
		</p>

		<p>
			8276 W MONROE ST. Peoria, AZ 85345
		</p>
	</div>

	<div class="floating-square green rectangle"></div>
	<div class="floating-square orange square"></div>
	<div class="floating-square blue block"></div>
</landing-heading>