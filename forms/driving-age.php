<?php

$age = null;
$template = null;


if (isset($_POST['age-submit'])) {

	if (isset($_POST['age'])) {
		if ($_POST['age'] >= 0) {
			$age = $_POST['age'];
		}
	}

	$template = ($age > 16 ? 'You are old enough to legally drive.' :  'You are not old enough to legally drive.');
}
?>

<form action="" autocomplete="off" method="post" id='driving'>

	<form-field>

		<label for="">What's your age?</label>
		<input type="number" name='age' value='<?= $age ?>' required min='0'>

	</form-field>

	<button class='action-link' type="submit" name='age-submit'>Check Age</button>


</form>
<div class='feedback'>

	<p><?= $template ?> </p>

</div>