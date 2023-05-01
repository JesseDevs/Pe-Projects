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
			Saturday November 4th, 2023
		</p>
		<p>
			Old Town Wedding & Event Center
		</p>

		<p>
			8276 W MONROE ST. Peoria, AZ
		</p>
	</div>

	<div class="floating-square green rectangle"></div>
	<div class="floating-square orange square"></div>
</landing-heading>