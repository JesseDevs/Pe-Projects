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
	<a class='project-link' href="?page=project&id=<?=$project["id"] ?>" target="_blank">
		<picture class='project-thumbnail'>
			<img src=" <?= $project['thumbnail'] ?>" alt="">
		</picture>
	</a>
	<p class="project-detail"><?= $project['detail'] ?></p>
	<text-content class="project-actions">
		<?php foreach ($project['links'] as $link){ ?>
			<a href='<?= $link['link'] ?>'><?= $link['title'] ?></a>
		<?php } ?>
	</text-content>

</project-card>
