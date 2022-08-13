<goal-card>
	<span><?= ucfirst($goals['title']);?></span>

	<ul>

		<?php foreach ($goals['goals'] as $goal){?>



			<li><?= $goal ?></li>

		<?php }?>
	</ul>
</goal-card>
