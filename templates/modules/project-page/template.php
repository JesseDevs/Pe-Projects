<project-page>
	<div class="overflow-scroll">
		<ul>
			<?php foreach ($projectData['images'] as $image) { ?>
				<li>

					<img src="<?= $image ?> " alt="detail-image">

				</li>

			<?php } ?>
		</ul>
	</div>

	<div class="container">
		<div class="links">
			<?php foreach ($projectData['links'] as $link) { ?>


				<a target="blank" href="<?= $link['link'] ?>"><?= $link['title'] ?></a>
			<?php } ?>
		</div>
		<article-grid class="casestudy">
			<?php foreach ($projectData['casestudy'] as $section) { ?>
				<article>
					<h3 class="attention-voice"><?= $section['header'] ?></h3>
					<text-content>
						<?php foreach ($section['writeup'] as $writing) { ?>


							<p><?= $writing ?></p>

						<?php } ?>
					</text-content>
				</article>
			<?php } ?>

		</article-grid>
	</div>

	</project-detail>

	<!-- <?php foreach ($projectData['casestudy'] as $article) { ?>

		<section class="<?= $article["module"] ?>">
			<inner-column>

				<?php
				include('templates/case/' . $article["module"] . '/template.php');
				?>

			</inner-column>
		</section>
	<?php } ?> -->