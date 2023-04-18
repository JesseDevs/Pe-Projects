<?php

$age = null;
$template = null;
$class = '';

if (isset($_POST['age-submit'])) {

	if (isset($_POST['age'])) {
		if ($_POST['age'] >= 0) {
			$age = $_POST['age'];
		}
	}

	$template = ($age > 16 ? 'You are old enough to legally drive.' :  'You are not old enough to legally drive.');
	$class = 'confirmation';
}
?>

<form action="" class='support-grid' autocomplete="off" method="post" id='driving'>

	<form-field>

		<label for="">What's your age?</label>
		<input type="number" name='age' value='<?= $age ?>' required min='0'>

	</form-field>

	<button class='action-link' type="submit" name='age-submit'>Check Age</button>


</form>
<div class='<?= $class ?>feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p><?= $template ?> </p>

</div>