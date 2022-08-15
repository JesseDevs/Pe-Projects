

<project-page>
	<div class="overflow-scroll">
		<ul>
			<?php foreach($projectData['images'] as $image){ ?>
				<li>

					<img src="<?= $image?> " alt="detail-image">

				</li>

			<?php } ?>
		</ul>
	</div>

	<div class="container">
		<div class="links">
			<?php foreach($projectData['links'] as $link){?>


				<a href="<?=$link['link']?>"><?= $link['title']?></a>
			<?php } ?>
		</div>
		<p><?= $section['description']?></p>
	</div>

</project-detail>
