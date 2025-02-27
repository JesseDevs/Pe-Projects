<?php

$numOne = '';
$numTwo = '';
$multiply = null;
$add = null;
$subtract = null;
$divide = null;

$templateOne = "";
$templateTwo = "";
$templateThree = "";
$templateFour = "";


$class = '';

if (isset($_POST['math-submit'])) {

	if (isset($_POST['numOne'])) {
		if ($_POST['numOne'] <= 0) {
			$numOne = 1;
		} else {
			$numOne = $_POST['numOne'];
		}
	}

	if (isset($_POST['numTwo'])) {
		if ($_POST['numTwo'] <= 0) {
			$numTwo = 1;
		} else {
			$numTwo = $_POST['numTwo'];
		}
	}

	$multiply = floatval($numOne) * floatval($numTwo);
	$divide = floatval($numOne) / floatval($numTwo);
	$add = floatval($numOne) + floatval($numTwo);
	$subtract = floatval($numOne) - floatval($numTwo);

	$templateOne = $numOne . " + " . $numTwo . " = " . "<strong>" . $add . "</strong>";
	$templateTwo = $numOne . " - " . $numTwo . " = " . "<strong>" . $subtract . "</strong>";
	$templateThree = $numOne . " x " . $numTwo . " = " . "<strong>" . $multiply . "</strong>";
	$templateFour = $numOne . " / " . $numTwo . " = " . "<strong>" . $divide . "</strong>";

	$class = 'confirmation';
} ?>

<form action="" class='support-grid' method="post" autocomplete="off" id='math'>

	<form-field>

		<label for="">Enter a number.</label>
		<input type="number" inputmode=decimal name='numOne' value='<?= $numOne ?>' required min='1'>

	</form-field>

	<form-field>
		<label for="">Enter another number.</label>
		<input type="number" inputmode=decimal name='numTwo' value='<?= $numTwo ?>' required min='1'>

	</form-field>

	<button class='action-link' type="submit" name='math-submit' formtarget="_blank">Calculate</button>


</form>

<div class='<?= $class ?> feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p><?= $templateOne ?></p>
	<p><?= $templateTwo ?></p>
	<p><?= $templateThree ?></p>
	<p><?= $templateFour ?></p>

</div>