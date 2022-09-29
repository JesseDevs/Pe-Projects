<?php

$json = file_get_contents("data/playstyle.json");
$playstyleData = json_decode($json, true);
$playstyle = $playstyleData["playstyle"];

?>

<?php include('templates/modules/big-heading/template.php') ?>

<section>
    <inner-column>
        <playstyle-grid>

            <h2 class="strict-voice">Who to choose?</h2>


            <?php foreach ($playstyle as $style) { ?>
                <?php include('templates/modules/playstyle-card/template.php') ?>

            <?php } ?>
        </playstyle-grid>

    </inner-column>
</section>