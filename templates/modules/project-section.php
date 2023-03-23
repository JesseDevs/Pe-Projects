<project-section>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>

		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>

	<div class="swiper mySwiper">
		<div class="swiper-wrapper">

			<?php
			if ($page == 'home') {
				foreach ($projectsData as $project) { ?>
					<?php if ($project['featured']) { ?>
						<div class="swiper-slide">
							<?php include('templates/modules/project-card.php'); ?>
						</div>
			<?php }
				}
			} ?>

			<?php if ($page == 'projects' or $page == 'style') {
				foreach ($projectsData as $project) { ?>
					<div class="swiper-slide">
						<?php include('templates/modules/project-card.php'); ?>
					</div>
			<?php }
			}
			?>
		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

	</div>
	</div>
	</div>

</project-section>