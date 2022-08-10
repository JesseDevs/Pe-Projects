


<?php


$length = '';
$width = '';
$area = null;
$paint = null;

if (isset($_POST['submitted'])) {

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
    $paint = ceil($area / 350);
}
?>


<form action="" method="post">

    <h2>How many gallons of paint do you need to cover the entire ceiling?</h2>

    <field>

        <label for="">What is the length of the ceiling?</label>
        <input type="number" name='length' value='<?= $length ?>' required min='0'>

    </field>

    <field>

        <label for="">What is the width of the ceiling?</label>
        <input type="number" name='width' value='<?= $width ?>' required min='0'>

    </field>

    <button type="submit" name='submitted'>Calculate</button>


</form>

<results class='feedback'>
    <h3> The Results</h3>
    <p> The ceiling of the room is: <?= $area ?></p>
    <p> You'll need: <strong><?= $paint ?></strong> gallons to cover the entire ceiling</p>
    <a href="?page=e4p">&#8592; E4P Home</a>
</results>

