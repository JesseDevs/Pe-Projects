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
			<text-content>
				<h4 class="chant-voice"><?= $file['title'] ?></h4>
				<p><?= $file['p'] ?></p>
			</text-content>
			<div>
				<?php if (isset($file['image'])) { ?>
					<picture>
						<img src="<?= $file['image'] ?>" alt="project-image">
					</picture>
				<?php } ?>
				<action-links>

					<?php if (isset($file['link'])) { ?>

						<a class='action-link' href="<?= $file['link'] ?>">Live</a>
					<?php } ?>

					<a class='action-link' href="<?= $file['git'] ?>">Github</a>

				</action-links>
			</div>
		</article>
	<?php } ?>
</case-block>