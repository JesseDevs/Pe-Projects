<?php
$projectDetailPageLink = $project['links'][0]['link']  ?? $project['direct-link'];
?>


<project-card>
	<picture class='project-thumbnail'>

		<img src=" <?= $project['thumbnail'] ?>" alt="" loading='lazy'>
	</picture>
	<text-content>

		<h3 class='chant-voice'><?= $project['title'] ?></h3>
		<span class="span-title"><?= strtoupper($project['intro']) ?></span>
	</text-content>


	<div class="skills">
		<?php foreach ($project['skills'] as $skill) { ?>
			<p class="small-voice"><?= $skill ?></p>
		<?php } ?>
	</div>

	<p class="project-detail "><?= $project['detail'] ?></p>

	<a class="action-link" href="<?= $projectDetailPageLink ?>"><?= $project['links'][0]['title'] ?></a>
</project-card>