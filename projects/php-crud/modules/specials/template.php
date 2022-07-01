<?php

//bring in data
$json = file_get_contents("data/fighter-data.json");
$fighterData = json_decode($json, true);
$fighters = $fighterData["fighters"];

$chosenSpecial = null;
$specialName = null;

if (isset($_GET[['specials']['name']])) {
    $specialName = $_GET[['specials']];
}

print_r($specialName);
?>

<?php foreach ($fighters as $fighter) {
    if ($specialName == $fighter['specials']['name']) {
        $chosenSpecial = $fighter['specials'];
    }
}

?>

<?php if (isset($chosenSpecial)) { ?>


    <header class="detail-header">
        <inner-column>
            <h2 class=' attention-voice'>
                <?= $chosenSpecial['name'] ?></h2>
        </inner-column>
    </header>

    <!-- <section class='fighter-detail'>
        <inner-column>
            <fighter-page class='detail'>


                <div class="container">
                    <picture class='portrait'>
                        <img src="<?= $chosenFighter['portrait'] ?>" alt="SFV:<?= $chosenFighter['name'] ?> ">
                    </picture>
                    <article-grid class='costumes'>
                        <?php foreach ($chosenFighter['costumes'] as $costumes) { ?>
                            <picture>
                                <img src="<?= $costumes ?>" alt=''>
                            </picture>
                        <?php } ?>
                    </article-grid>
                </div>

                <text-content>
                    <em class='calm-voice'><?= $chosenFighter['quote'] ?></em>

                    <audio controls>
                        <source src="<?= $chosenFighter['audio'] ?>" type='audio/wav'>
                        </source>
                    </audio>

                    <div>
                        <p><strong>Playstyle:</strong>&nbsp;<?= $chosenFighter['playstyle'] ?> </p>
                        <p><strong>Occupation:</strong>&nbsp; <?= $chosenFighter['occupation'] ?>
                        </p>
                    </div>
                    <p><?= $chosenFighter['description'] ?></p>

                    <h2 class="attention-voice">SPECIALS</h2>
                    <article-grid class='specials'>

                        <?php foreach ($chosenFighter['specials'] as $special) { ?>
                            <article>
                                <h3 class='deep-voice'><?= $special[0] ?></h3>

                                <picture>
                                    <img src="<?= $special[1] ?>" alt="">
                                </picture>
                            </article>
                        <?php } ?>
                    </article-grid>

                </text-content>
            </fighter-page> -->

<?php } else { ?>

    <h1?> No Fighter found. </h1>


    <?php } ?>
    </inner-column>
    </section>