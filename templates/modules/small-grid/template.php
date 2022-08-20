<?php

$filtered = [];

foreach ($projectsData as $project){
	if ($project['id'] !== $_GET['id']) {
		array_push($filtered, $project);
	}
}


?>

<small-grid>
	<text-content>
		<h2 class='yell-voice'><?= $section['heading']; ?></h2>

		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>
	<?php 


	foreach ($filtered as $project) { 

		include('templates/modules/project-card/template.php');


	}?>
</small-grid>
