<?php
$currentYear = date("Y");
$currentAge = '';
$retireAge = '';
$ageDifference = 0;
$retireYear = 0;

$template = "";


$class = '';

if (isset($_POST['retire-submit'])) {

	if ((isset($_POST['currentAge'])) && (isset($_POST['retireAge']))) {



		if (($_POST['currentAge'] != '') && ($_POST['retireAge'] != '')) {

			$currentAge = floatval($_POST['currentAge']);
			$retireAge = floatval($_POST['retireAge']);
			$ageDifference = $retireAge - $currentAge;
			$retireYear = $currentYear + $ageDifference;




			$template = "<strong>$ageDifference</strong> years left until you can retire.<br> It's <strong>$currentYear</strong>, so you can retire in <strong>$retireYear</strong>.";

			if ($ageDifference <= 0) {
				$template = "DING! DING! Retire time.";
			}
		}
	}
	$class = 'confirmation';
} ?>


<form method="POST" class='support-grid' autocomplete="off" id='retire'>

	<form-field>
		<label for="">What is your age?</label>
		<input type="number" inputmode=decimal required name="currentAge" value="<?= $currentAge ?>" min="0">

	</form-field>

	<form-field>
		<label for="">What age would you like to retire?</label>
		<input type="number" inputmode=decimal required name="retireAge" value="<?= $retireAge ?>" min="0">

	</form-field>

	<button class='action-link' type="submit" name='retire-submit'>Calculate</button>

</form>

<div class='<?= $class ?> feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<p> <?= $template ?> </p>
</div>