<project-card>
	<span><?= strtoupper($project['intro']) ?></span>
	<h3><?= $project['title'] ?></h3>

	<text-content class="skills">
		<?php foreach ($project['skills'] as $skill){ ?>
			<p><?= $skill ?></p>
		<?php } ?>
	</text-content>

	<p><?= $project['detail'] ?></p>
	<picture>
		<img src=" <?= $project['thumbnail'] ?>" alt="">
	</picture>
	<text-content class="project-actions">
		<?php foreach ($project['links'] as $link){ ?>
			<a href='<?= $link['link'] ?>'><?= $link['title'] ?></a>
		<?php } ?>
	</text-content>

</project-card>
