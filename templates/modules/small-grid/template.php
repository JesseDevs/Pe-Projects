

<small-grid>
	<text-content>
		<h2 class='yell-voice'><?= $section['heading']; ?></h2>

		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>
	<?php 
	$class = null;
	foreach ($projectsData as $project) { 

		include('templates/modules/project-card/template.php');


	}?>
</small-grid>
