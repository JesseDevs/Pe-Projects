<project-page>
	<div class="overflow-scroll">
		<ul>
			<?php foreach($projectData['images'] as $image){ ?>
				<li>
					<picture>
						<img src="<?= $image?> " alt="detail-image">
					</picture>
				</li>

			<?php } ?>
		</ul>
	</div>

	<picture><img src="" alt=""></picture>

	<picture class="code">
		<img src="<?= $projectData['code']?> " alt="code-image">
	</picture>

	<p><?= $section['description']?></p>

</project-detail>
