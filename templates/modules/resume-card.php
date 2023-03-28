<resume-card>

	<text-content>
		<?php if ($type == 'job') { ?>
			<h5 class='strict-voice company'><?= $item['company'] ?> &#183; <em><?= $item['role'] ?></em></h5>



		<?php } else { ?>
			<h5 class='strict-voice company'><?= $item['school'] ?> &#183; <em><?= $item['major'] ?></em></h5>

		<?php } ?>


		<p class='date'><?= $item['startDate'] ?> &#8212; <?= $item['endDate'] ?></p>
	</text-content>
	<ul class="skills ">
		<?php foreach ($item['skills'] as $skill) { ?>
			<li>
				<p class="small-voice"><?= $skill ?></p>
			</li>
		<?php } ?>
	</ul>
	<p class='story'><?= $item['takeaways'] ?></p>

	<!-- <p><?= $item['specialNote'] ?></p> -->

</resume-card>