<!-- $projectData -->
<?php
$case = $projectData['casestudy'];
$files =
	$projectData['files'];
?>

<case-block class="is-a-case-study grid-template">
	<p class='headline'><?= $case['p1'] ?></p>

	<?php foreach ($files as $file) { ?>
		<article>
			<h4 class="chant-voice"><?= $file['title'] ?></h4>
			<p><?= $file['p'] ?></p>
			<picture>
				<img src="<?= $file['image'] ?>" alt="project-image">
			</picture>
			<action-links>

				<a class='action-link' href="<?= $file['link'] ?>">Live</a>
				<a class='action-link' href="<?= $file['git'] ?>">Github</a>
			</action-links>
		</article>
	<?php } ?>
</case-block>