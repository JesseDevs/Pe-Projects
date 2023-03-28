<resume-section id="resume" class='grid-template'>

	<text-content>
		<h2 class='loud-voice'><?= $section['heading']; ?></h2>
		<p class='intro'><?= $section['intro']; ?></p>
	</text-content>


	<h4 class='chant-voice'>Work Experience</h4>
	<?php renderList($resumeData, "job"); ?>


	<h4 class='chant-voice education'>Education Experience</h4>
	<?php renderList($resumeData, "education"); ?>


</resume-section>