
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


if (isset($_POST['submitted'])) {

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

    if (isset($_POST['priceThree'])) {
        if ($_POST['priceThree'] >= 0) {
            $priceThree = $_POST['priceThree'];
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

    if (isset($_POST['quantityThree'])) {
        if ($_POST['quantityThree'] >= 0) {
            $quantityThree = $_POST['quantityThree'];
        }
    }


    $totalOne = floatval($priceOne) * floatval($quantityOne);
    $totalTwo = floatval($priceTwo) * floatval($quantityTwo);
    $totalThree = floatval($priceThree) * floatval($quantityThree);

    $subTotal = $totalOne + $totalTwo + $totalThree;
    $tax = $subTotal * .055;
    $total = $subTotal + $tax;
} ?>

<form action="" method="post">

    <field>
        <div class="container">
            <label for="">How many <em>Apples</em> are you taking?</label>
            <input type="number" name='quantityOne' value='<?= $quantityOne ?>' required min='0'>
        </div>

        <div class="container">
            <label for="">Whats the price of the <em>Apples</em> you are taking?</label>
            <input type="number" name='priceOne' value='<?= $priceOne ?>' required min='0'>
        </div>
    </field>

    <field>
        <div class="container">
            <label for="">How many <em>Oranges</em> are you taking?</label>
            <input type="number" name='quantityTwo' value='<?= $quantityTwo ?>' required min='0'>
        </div>

        <div class="container">
            <label for="">Whats the price of the <em>Oranges</em> you are taking?</label>
            <input type="number" name='priceTwo' value='<?= $priceTwo ?>' required min='0'>
        </div>
    </field>

    <field>
        <div class="container">
            <label for="">How many <em>Bananas</em> are you taking?</label>
            <input type="number" name='quantityThree' value='<?= $quantityThree ?>' required min='0'>
        </div>

        <div class="container">
            <label for="">Whats the price of the <em>Bananas</em> you are taking?</label>
            <input type="number" name='priceThree' value='<?= $priceThree ?>' required min='0'>
        </div>
    </field>

    <button type="submit" name='submitted'>Calculate</button>


</form>

<results class='feedback'>
    <h3 class="chant-voice"> The Results</h3>
    <p>The subtotal of Apples is: <?= $totalOne ?></p>
    <p>The subtotal of Oranges is: <?= $totalTwo ?></p>
    <p>The subtotal of Bananas is: <?= $totalThree ?></p>
    <p>The subtotal of all items is:<?= $subTotal ?> </p>
    <p>The tax on this purchase is: <?= $tax ?> </p>
    <strong>
        <p>The total is: <?= $total ?> </p>
    </strong>


</results>
