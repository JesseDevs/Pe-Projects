<?php

$requestedId = null;
$chosenFighter = null;

if (isset($_GET['id'])) {
    $requestedId = $_GET['id'];
}

$chosenFighter = getFighterById($requestedId);

?>

<header class="detail-header">
    <inner-column>
        <h2 class=' attention-voice'>
            <?= $chosenFighter['name'] ?></h2>
    </inner-column>
</header>

<section class='detail-page'>
    <inner-column>
        <fighter-page>

            <?php include('templates/modules/general-diptech/template.php') ?>

            <?php include('templates/modules/info-block/template.php') ?>

            <?php if ($chosenFighter['id'] !== 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8) { ?>

                <form method="POST" class='delete'>

                    <button type="submit" name='delete'>Delete</button>
                </form>
            <?php } ?>

        </fighter-page>

    </inner-column>
</section>