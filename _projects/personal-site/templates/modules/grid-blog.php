<grid-blog>
	<h2 class='loud-voice'><?= $section['heading']; ?></h2>

	<text-content>
		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>

	<ul>
		<?php foreach ($section['items'] as $item) { ?>
			<li>
				<?php include('templates/modules/blog-card.php') ?>
			</li>

		<?php } ?>
	</ul>

</grid-blog>