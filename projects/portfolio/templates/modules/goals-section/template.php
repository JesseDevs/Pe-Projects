<goals-section>
	

	<h3 class="attention-voice">Goals</h3>


	<p class='intro'><?= $section['intro']; ?></p>

	<h4 class="chant-voice"><?= $section['lead']; ?></h4>




	<?php
	foreach ($goalsData as $goals) { ?>

		<span><?= $goals['title'];?></span>

		<?php include('templates/modules/goal-card/template.php');


	}?>
	


</goals-section>
