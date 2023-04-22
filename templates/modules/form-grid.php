<?php
$heading = $section['heading'] ?? "Exercise Grid";
$intro = $section['intro'] ?? "Check it out!";

?>
<form-grid class='grid-template'>


	<text-content>

		<h2 class='loud-voice'><?= $heading; ?></h2>
		<p class=' form-intro intro'><?= $intro; ?></p>
	</text-content>

	<select name="form-select" id="form-select" class='form-select'>
		<option value="-" selected disabled>Select:</option>
		<?php foreach ($section['items'] as $form) { ?>

			<option value="<?= $form["file-name"] . "-form" ?>"><?= strtoupper($form['title']) ?></option>
		<?php } ?>
	</select>

	<ul>
		<?php foreach ($section['items'] as $formThing) { ?>
			<li>
				<form-box id="<?= $formThing['file-name'] ?>-form">
					<sub-heading>
						<h3 class="attention-voice"><?= $formThing['title'] ?></h3>
						<p class="intro"><?= $formThing['intro'] ?></p>
					</sub-heading>

					<?php include("_forms/" . $formThing['file-name'] . ".php") ?>
				</form-box>
			</li>
		<?php } ?>
	</ul>

	<div class="codepen-container" id="vue-codepen">
		<text-content>
			<p>
				<span class='first-words'>Vue is</span> a progressive JavaScript framework. A framework is a library that provides developers with a set of tools and functions to simplify and accelerate the development of web applications. These are similar forms built with Vue!
			</p>
		</text-content>
		<iframe height="500" style="width: 100%;" scrolling="no" title="Another 3 forms vue 3" src="https://codepen.io/Jesse_dude/embed/gOjmVdo?default-tab=" frameborder="no" allowtransparency="true" allowfullscreen="true">
			See the Pen <a href="https://codepen.io/Jesse_dude/pen/gOjmVdo">
				Another 3 forms vue 3</a> by Jesse (<a href="https://codepen.io/Jesse_dude">@Jesse_dude</a>)
			on <a href="https://codepen.io">CodePen</a>.
		</iframe>
		<button class="contains-up-arrow" id='top'>
			<svg class="icon-move-up">
				<use xlink:href="#icon-move-up"></use>

			</svg>
		</button>


	</div>



</form-grid>