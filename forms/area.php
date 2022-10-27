<?php

$length = '';
$width = '';
$area = null;
$templateOne = "";
$templateTwo = '';
$final = '';

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
    $templateOne = 'The length is: ' .  $length;
    $templateTwo = 'The width is: ' .  $width;
    $final = "Thus, the area is: " . $area;
}

?>

<form method="post" id="area">

    <field>
        <label for="">What is the length of the room?</label>
        <input type="number" name='length' value='<?= $length ?>' id="length" required min='0'>
    </field>

    <field>

        <label for="">What is the width of the room?</label>
        <input type="number" name='width' value='<?= $width ?>' id="width" required min='0'>

    </field>

    <button class='action-link' type="submit" name='submitted' id="calculate">Calculate</button>


</form>

<div class='feedback'>
    <p> <?= $templateOne ?></p>
    <p> <?= $templateTwo ?> </p>

    <p><strong> <?= $final ?></strong> </p>
</div>

<script>
    const $areaForm = document.querySelector('#area');

    calculateArea = function() {

        const $lengthInput = document.querySelector('#length');
        const $widthInput = document.querySelector('#width');

        $areaForm.addEventListener('input', function(event) {
            var length = numberFormatter.format($lengthInput.value);
            var width = numberFormatter.format($widthInput.value);

            $feedback.querySelector("p:first-of-type").textContent = `The length is: ${length}`;
            $feedback.querySelector("p:nth-of-type(2)").textContent = `The length is: ${width}`;

            var area = parseInt(length) * parseInt(width);
            var displayArea = numberFormatter.format(area);
            let meters = area * .09290304;

            meters = numberFormatter.format(meters.toFixed(2));

            let message = `You entered a dimensions of ${length} feet by ${width} feet. The area is ${displayArea} square feet. That is ${meters} square meters`;

            if (length == '' & width == '') {
                message = "Can't calculate..."
            } else if (length == '') {
                message = "Missing a length.."
            } else if (width == '') {
                message = "Missing a width.."
            }

            $feedback.querySelector("p:last-of-type strong").textContent = `${message}`;


        });
    }

    window.addEventListener('click', function(event) {
        if (event.target.matches("#switch")) {


            if ($areaForm) {
                calculateArea();

            }

        }
    })
</script>