<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<missing-heading>
	<text-content>
		<h1 class="roar-voice"><?= $heading ?></h1>
		<p class="intro"><?= $section['intro'] ?></p>
	</text-content>

	<div class="cube-sphere-container">
		<div class="spiral-cubes">
			<?php for ($i = 0; $i < 7; $i++) { ?>
				<div class="box-container">
					<div class="cube">
						<div class="face top"></div>
						<div class="face bottom"></div>
						<div class="face left"></div>
						<div class="face right"></div>
						<div class="face front"></div>
						<div class="face back"></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<nav>
		<ul>
			<?php foreach ($section['links'] as $link) { ?>

				<li><a class='action-link' target="_blank" href="<?= $link['link'] ?>"><?= $link['title'] ?></a></li>
			<?php } ?>
		</ul>
	</nav>


</missing-heading>