<?php


$priceOne = '';
$quantityOne = '';
$totalOne = null;

$priceTwo = '';
$quantityTwo = '';
$totalTwo = null;

$priceThree = '';
$quantityThree = '';
$totalThree = null;

$subTotal = '';
$tax = '';
$total = null;

$template = '';


$class = '';


if (isset($_POST['checkout-submit'])) {

	if (isset($_POST['priceOne'])) {
		if ($_POST['priceOne'] >= 0) {
			$priceOne = $_POST['priceOne'];
		}
	}

	if (isset($_POST['priceTwo'])) {
		if ($_POST['priceTwo'] >= 0) {
			$priceTwo = $_POST['priceTwo'];
		}
	}

	if (isset($_POST['quantityOne'])) {
		if ($_POST['quantityOne'] >= 0) {
			$quantityOne = $_POST['quantityOne'];
		}
	}

	if (isset($_POST['quantityTwo'])) {
		if ($_POST['quantityTwo'] >= 0) {
			$quantityTwo = $_POST['quantityTwo'];
		}
	}

	$totalOne = floatval($priceOne) * floatval($quantityOne);
	$totalTwo = floatval($priceTwo) * floatval($quantityTwo);
	$totalThree = floatval($priceThree) * floatval($quantityThree);

	$subTotal = $totalOne + $totalTwo + $totalThree;
	$tax = $subTotal * .055;
	$total = $subTotal + $tax;

	$template = "<p>The subtotal of Apples is: " . $totalOne . "</p>
    <p>The subtotal of Oranges is: " .  $totalTwo . "</p>
    <p>The subtotal of all items is: " . $subTotal . "</p>
    <p>The tax on this purchase is: " . $tax . "</p>
    <strong>
        <p>The total is: " . $total . "</p>
    </strong>";
	$class = 'confirmation';
} ?>

<form action="" class='support-grid' method="post" autocomplete="off" id="checkout">

	<form-field>
		<div class="container">
			<label for="">How many <em>Apples</em> are you taking?</label>
			<input type="number" name='quantityOne' value='<?= $quantityOne ?>' id='appleAmount' required min='0'>
		</div>

		<div class="container">
			<label for="">Whats the price of the <em>Apples</em>?</label>
			<input type="number" name='priceOne' value='<?= $priceOne ?>' required id='applePrice' min='0'>
		</div>
	</form-field>

	<form-field>
		<div class="container">
			<label for="">How many <em>Oranges</em> are you taking?</label>
			<input type="number" name='quantityTwo' value='<?= $quantityTwo ?>' id='orangeAmount' required min='0'>
		</div>

		<div class="container">
			<label for="">Whats the price of the <em>Oranges</em>?</label>
			<input type="number" id='orangePrice' name='priceTwo' value='<?= $priceTwo ?>' required min='0'>
		</div>

		<span> Tax is 5.5% in this equation</span>
	</form-field>



	<button class='action-link' type="submit" name='checkout-submit'>Calculate</button>


</form>

<div class='<?= $class ?> feedback'>
	<div class="contains-x">
		<svg class="icon-cancel-squared">
			<use xlink:href="#icon-cancel-squared"></use>
		</svg>
	</div>
	<?= $template ?>

</div>