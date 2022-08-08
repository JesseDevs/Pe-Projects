<project-card>
	<span class='one'><?= strtoupper($project['intro']) ?></span>
	<h3 class='attention-voice'><?= $project['title'] ?></h3>

	<text-content class="skills">
		<?php foreach ($project['skills'] as $skill){ ?>
			<p class="small-voice"><?= $skill ?></p>
		<?php } ?>
	</text-content>

	<a href="?page=project&id=<?=$project["id"] ?>">
		<picture class='project-thumbnail'>
			<img src=" <?= $project['thumbnail'] ?>" alt="">
		</picture>
	</a>
	<p><?= $project['detail'] ?></p>
	<text-content class="project-actions">
		<?php foreach ($project['links'] as $link){ ?>
			<a href='<?= $link['link'] ?>'><?= $link['title'] ?></a>
		<?php } ?>
	</text-content>

</project-card>
