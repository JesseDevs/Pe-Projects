<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<missing-heading>
	<text-content>
		<h1 class="roar-voice"><?= $heading ?></h1>
		<p class="intro"><?= $section['intro'] ?></p>
	</text-content>

	<nav>
		<ul>
			<?php foreach ($section['links'] as $link) { ?>

				<li><a class='action-link' target="_blank" href="<?= $link['link'] ?>"><?= $link['title'] ?></a></li>
			<?php } ?>
		</ul>
	</nav>


</missing-heading>