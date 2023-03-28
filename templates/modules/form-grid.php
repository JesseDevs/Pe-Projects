    <?php
	$heading = $section['heading'] ?? "Exercise Grid";
	$intro = $section['intro'] ?? "Check it out!";

	if (isset($_COOKIE['scrollPosition'])) {
		$cookie = $_COOKIE['scrollPosition'];
	} else {
		$cookie = 0;
	}

	?>
    <script>
    	var positionAt = <?= $cookie ?>;

    	window.addEventListener('DOMContentLoaded', function() {
    		window.scrollTo({
    			top: positionAt,
    			behavior: 'instant',
    		});
    		document.cookie = `scrollPosition=0`;
    	});
    </script>
    <form-grid>

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

    					<?php include("forms/" . $formThing['file-name'] . ".php") ?>
    				</form-box>
    			</li>
    		<?php } ?>
    	</ul>
    </form-grid>