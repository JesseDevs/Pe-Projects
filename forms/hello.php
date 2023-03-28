<?php


$name = null;
$message = null;
$template = '';



if (isset($_POST['hello-submit'])) {
	$name = $_POST['name'];
	$message = "Hello " . htmlspecialchars($name) . "! Nice to meet you!";

	$template = 'You typed: ' . $name;
}

?>

<form method="post" autocomplete="off" id="hello">

	<form-field>
		<label for="">What is your name?</label>
		<input type="text" name='name' value='<?= $name ?>' id="name" required>
	</form-field>

	<button class='action-link' type="submit" name='hello-submit' id="calculate">Submit</button>


</form>

<div class='feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p><strong> <?= $message ?></strong> </p>
</div>