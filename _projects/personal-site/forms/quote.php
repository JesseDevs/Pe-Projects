<?php

$quote = '';
$author = '';
$message = '';


if (isset($_POST['quote-submit'])) {

	$quote = htmlspecialchars($_POST['quote']);
	$author = htmlspecialchars($_POST['author']);

	$message = $author . ' said “ ' . $quote . ' ”';


	if ($quote == '' & $author == '') {
		$message = "Someone must have said nothing once. Maybe.";
	} else if ($quote == '') {
		$message = $author . ' must have said something, right?';
	} else if ($author == '') {
		$message = 'Someone must have said "' . $quote . '"! Maybe.';
	}
}
?>



<form method="post" autocomplete="off" id="quote-form">

	<form-field>
		<label for="">Who is the author?</label>
		<input type="text" name='author' value='<?= $author ?>' id="author" required>
	</form-field>

	<form-field>
		<label for="">What is your quote?</label>
		<input type="text" name='quote' value='<?= $quote ?>' id="quote" required>
	</form-field>


	<button class='action-link' type="submit" name='quote-submit' id="calculate">Calculate</button>


</form>

<div class='feedback'>

	<p> <?= $message ?></p>
</div>