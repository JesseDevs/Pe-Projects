<?php

//bring in data
$json = file_get_contents("data/fighter.json");
$fighterData = json_decode($json, true);
$fighters = $fighterData["fighters"];

$chosenFighter = null;
$requestedId = null;

if (isset($_GET['id'])) {
    $requestedId = $_GET['id'];
}
// echo $requestedId; 

foreach ($fighters as $fighter) {
    if ($requestedId == $fighter['id']) {
        $chosenFighter = $fighter;
    }
}


?>
<?php if (isset($chosenFighter)) {

    $enemy = $chosenFighter['arch-enemy'];

    if (isset($enemy)) {
        foreach ($fighters as $fighter) {
            if ($enemy == $fighter['id']) {
                $versus = $fighter;
            }
        }
    } ?>
    <header class="detail-header">
        <inner-column>
            <h2 class=' attention-voice'>
                <?= $chosenFighter['name'] ?></h2>
        </inner-column>
    </header>

    <section class='fighter-detail'>
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

                    <?php if (isset($chosenFighter['arch-enemy'])) { ?>
                        <article class="enemy">
                            <div class="container">
                                <h3 class="strict-voice">Arch-nemesis</h3>
                                <p><?= $chosenFighter['name'] ?> is ready to battle <?= $versus['name'] ?> </p>
                            </div>

                            <picture>
                                <img src="<?= $versus['portrait'] ?>" alt="enemy">
                            </picture>
                        </article>
                    <?php } ?>
                    <h2 class="attention-voice">SPECIALS</h2>
                    <article-grid class='specials'>

                        <?php foreach ($chosenFighter['specials'] as $special) { ?>
                            <article>

                                <h3 class='deep-voice'><?= $special['name'] ?></h3>
                                <picture>
                                    <img src=" <?= $special['image'] ?>" alt="">
                                </picture>

                            </article>

                        <?php } ?>
                    </article-grid>

                </text-content>
            </fighter-page>

        <?php } else { ?>

            <h1?> No Fighter found. </h1>


            <?php } ?>
        </inner-column>
    </section>