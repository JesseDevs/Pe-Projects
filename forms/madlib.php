<?php

$noun = '';
$verb = '';
$adjective = '';
$adverb = '';

$message = "";

if (isset($_POST['madlib-submit'])) {
	$noun = $_POST['noun'];
	$verb = $_POST['verb'];
	$adjective = $_POST['adjective'];
	$adverb = $_POST['adverb'];

	$message = "<strong>" . $noun . "</strong> <strong>" . $verb . "</strong> <strong>" . $adverb . "</strong>  while maintaining <strong>" . $adjective . "</strong> poise!";
}

?>

<form method="POST" autocomplete="off" id="madlib">

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



	<button class='action-link' type="submit" name='madlib-submit' id="calculate">Submit</button>


</form>

<div class='feedback'>

	<p><?= $message ?></p>
</div>