<?php

$username = 'JohnDoe';
$inputUsername = null;
$password = '1020World';
$inputPassword = null;
$template = null;

$class = '';

if (isset($_POST['password-submit'])) {

	if (isset($_POST['username'])) {
		if (strlen($_POST['username']) > 0) {
			$inputUsername = $_POST['username'];
		}
	}

	if (isset($_POST['password'])) {
		if (strlen($_POST['password']) > 0) {
			$inputPassword = $_POST['password'];
		}
	}

	if ($inputUsername == $username && $inputPassword = $password) {
		$template =  "You're logged in! Welcome!";
	} else {
		$template = "Username or Password is incorrect. Try again.";
	}
	$class = 'confirmation';
} ?>

<form action="" class='support-grid' method="post" autocomplete="off" id='password'>

	<form-field>

		<label for="">Enter username:</label>
		<input type="text" name='username' id='form-username' autocomplete="off" value='<?= $inputUsername ?>' required min='0'>

		<span>*Hint: <em>JohnDoe </em></span>

	</form-field>

	<form-field>

		<label for="">Enter password:</label>
		<input type="password" name='password' id='form-password' autocomplete="off" value='<?= $inputUsername ?>' required min='0'>

		<span>*Hint: <em>1020World</em></span>

	</form-field>

	<button class='action-link' type="submit" name='password-submit'>Calculate</button>


</form>

<div class='<?= $class ?> feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p><?= $template ?></p>
</div>