<?php


$name = null;
$message = null;
$template = '';
$class = '';



if (isset($_POST['hello-submit'])) {
	$name = $_POST['name'];
	$message = "Hello <strong>" . htmlspecialchars($name) . "</strong>! Nice to meet you!";

	$template = 'You typed: ' . $name;

	$class = 'confirmation';
}

?>

<form method="post" class='support-grid' autocomplete="off" id="hello">

	<form-field>
		<label for="">What is your name?</label>
		<input type="text" name='name' value='<?= $name ?>' id="name" required>
	</form-field>

	<button class='action-link' type="submit" name='hello-submit'>Submit</button>


</form>

<div class='<?= $class ?> feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p> <?= $message ?></p>
</div>