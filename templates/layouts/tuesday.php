<module>

	<module-header>
		<p class='teaser'>Little Teaser</p>
		<h2 class='loud-voice'>Heading level 2 small</h2>
		<p class='intro-voice'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio dignissimos qui impedit eum quaerat repudiandae est.</p>
	</module-header>

	<ul class='articles'>
		<?php
		for ($x = 1; $x < 5; $x++) { ?>

			<li>
				<picture>
					<?php include('./images/svg.php') ?>
				</picture>
				<article>
					<h3 class='strict-voice'>Heading level 3 small</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique.</p>
				</article>
			</li>
		<?php } ?>
	</ul>

	<div>

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique.</p>
	</div>
</module>