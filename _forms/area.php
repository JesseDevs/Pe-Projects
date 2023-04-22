<?php

$length = '';
$width = '';
$area = null;
$templateOne = "";
$templateTwo = '';
$final = '';

$class = '';


if (isset($_POST['area-submit'])) {

	if (isset($_POST['length'])) {
		if ($_POST['length'] >= 0) {
			$length = $_POST['length'];
		}
	}

	if (isset($_POST['width'])) {
		if ($_POST['width'] >= 0) {
			$width = $_POST['width'];
		}
	}

	$area = floatval($length) * floatval($width);
	$templateOne = 'The length is: ' .  $length;
	$templateTwo = 'The width is: ' .  $width;
	$final = "Thus, the area is: " . $area;

	$class = 'confirmation';
}

?>

<form method="post" class='support-grid' id="area" autocomplete="off">

	<form-field>
		<label for="">What is the length of the room?</label>
		<input type="number" name='length' value='<?= $length ?>' id="length" required min='0'>
	</form-field>

	<form-field>

		<label for="">What is the width of the room?</label>
		<input type="number" name='width' value='<?= $width ?>' id="width" required min='0'>

	</form-field>

	<button class='action-link' type="submit" name='area-submit'>Calculate</button>

</form>

<div class='<?= $class ?> feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p> <?= $templateOne ?></p>
	<p> <?= $templateTwo ?> </p>

	<p><strong> <?= $final ?></strong> </p>
</div>