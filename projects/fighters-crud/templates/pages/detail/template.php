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

            <?php if ($chosenFighter['id'] < 8) {
                include('templates/modules/info-block/template.php');
            } ?>

            <?php if ($chosenFighter['id'] > 8) { ?>
                <div class="data-buttons">

                    <a class=" button delete" href="?page=delete&id=<?= $chosenFighter['id'] ?>"><span>Delete</span></a>

                    <a class=" button edit" href="?page=edit&id=<?= $chosenFighter['id'] ?>"><span>Edit</span></a>
                </div>

            <?php } ?>

        </fighter-page>

    </inner-column>
</section>