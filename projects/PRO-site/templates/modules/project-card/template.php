<project-card>
	<span class='one'><?= strtoupper($project['intro']) ?></span>
	<span class='two'><?= strtoupper($project['intro']) ?></span>
	<h3 class='attention-voice'><?= $project['title'] ?></h3>

	<text-content class="skills">
		<?php foreach ($project['skills'] as $skill){ ?>
			<p><?= $skill ?></p>
		<?php } ?>
	</text-content>

	
	<picture class='project-thumbnail'>
		<img src=" <?= $project['thumbnail'] ?>" alt="">
	</picture>
	<p><?= $project['detail'] ?></p>
	<text-content class="project-actions">
		<?php foreach ($project['links'] as $link){ ?>
			<a href='<?= $link['link'] ?>'><?= $link['title'] ?></a>
		<?php } ?>
	</text-content>

</project-card>
