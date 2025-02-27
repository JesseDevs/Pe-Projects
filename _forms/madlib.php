<?php

$noun = '';
$verb = '';
$adjective = '';
$adverb = '';

$message = "";
$class = '';

if (isset($_POST['madlib-submit'])) {
	$noun = $_POST['noun'];
	$verb = $_POST['verb'];
	$adjective = $_POST['adjective'];
	$adverb = $_POST['adverb'];

	$message = "<strong>" . $noun . "</strong> <strong>" . $verb . "</strong> <strong>" . $adverb . "</strong>  while maintaining <strong>" . $adjective . "</strong> poise!";
	$class = 'confirmation';
}

?>

<form method="POST" class='support-grid' autocomplete="off" id="madlib">

	<form-field>
		<label for="">Enter a noun.</label>
		<input type="text" required name="noun" value="<?= $noun ?>">
	</form-field>

	<form-field>
		<label for="">Enter a verb.</label>
		<input type="text" required name="verb" value="<?= $verb ?>">

	</form-field>


	<form-field>
		<label for="">Enter an adverb.</label>
		<input type="text" required name="adverb" value="<?= $adverb ?>">

	</form-field>

	<form-field>
		<label for="">Enter an adjective.</label>
		<input type="text" required name="adjective" value="<?= $adjective ?>">

	</form-field>



	<button class='action-link' type="submit" name='madlib-submit'>Submit</button>


</form>

<div class='<?= $class ?> feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p><?= $message ?></p>
</div>