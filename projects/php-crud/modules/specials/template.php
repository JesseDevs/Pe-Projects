<?php

$fighters = getFighters();

$requestedId = null;
$chosenFighter = null;

if (isset($_GET['id'])) {
    $requestedId = $_GET['id'];
}

$chosenFighter = getFighterById($requestedId);

$specials =  $chosenFighter['specials'];
?>

<ul>
    <?php foreach ($specials as $special) { ?>
        <li><?= $special['name'] ?></li>
    <?php } ?>

</ul>