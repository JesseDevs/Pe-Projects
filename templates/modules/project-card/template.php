
<?php
$projectLink = $project['links'][0]['link']  ?? $project['direct-link'];
?>


<project-card>

	<span><?= strtoupper($project['intro']) ?></span>
	<div>
		<h3 class='attention-voice'><?= $project['title'] ?></h3>

		<text-content class="skills">
			<?php foreach ($project['skills'] as $skill){ ?>
				<p class="small-voice"><?= $skill ?></p>
			<?php } ?>
		</text-content>
	</div>
	<a class='project-link' target="_blank" href="<?=$project["direct-link"] ?>">
		<picture class='project-thumbnail'>
			<img src=" <?= $project['thumbnail'] ?>" alt="">
		</picture>
	</a>
	<p class="project-detail"><?= $project['detail'] ?></p>

	<a class="projects-action"  target="_blank" href='<?= $projectLink ?>'><?= $project['links'][0]['title'] ?></a>
</project-card>
