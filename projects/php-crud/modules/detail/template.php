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

// foreach ($chosenFighter['specials'] as $specials) {
//     print_r($specials);
// }


if (isset($chosenFighter)) {

    $enemy = $chosenFighter['arch-enemy'];
    $ally = $chosenFighter['ally'];

    if (isset($enemy)) {
        foreach ($fighters as $fighter) {
            if ($enemy == $fighter['id']) {
                $versus = $fighter;
            }
        }
    }

    if (isset($ally)) {
        foreach ($fighters as $fighter) {
            if ($ally == $fighter['id']) {
                $friend = $fighter;
            }
        }

        if (is_array($ally)) {
            foreach ($ally as $a) {
                foreach ($fighters as $fighter) {
                    if ($a == $fighter['id']) {
                        $friend = $fighter;
                    }
                }
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

                    <em class='calm-voice'><?= $chosenFighter['quote'] ?></em>

                    <audio controls>
                        <source src="<?= $chosenFighter['audio'] ?>" type='audio/wav'>
                        </source>
                    </audio>


                </div>

                <text-content>
                    <h2 class="attention-voice">SPECIALS</h2>
                    <article-grid class='specials'>
                        <?php foreach ($chosenFighter['specials'] as $special) { ?>
                            <article>

                                <h3 class='deep-voice'><?= $special['name'] ?></h3>
                                <picture>
                                    <img src=" <?= $special['image'] ?>" loop=false alt="">
                                </picture>

                            </article>

                        <?php } ?>
                    </article-grid>

                    <div>
                        <p><strong>Playstyle:</strong>&nbsp;<?= $chosenFighter['playstyle'] ?> </p>
                        <p><strong>Occupation:</strong>&nbsp; <?= $chosenFighter['occupation'] ?>
                        </p>
                    </div>

                    <p><?= $chosenFighter['description'] ?></p>

                    <?php if (isset($versus['arch-enemy'])) { ?>
                        <a href="?page=detail&id=<?= $versus['id'] ?>">
                            <article class="enemy relation">
                                <div class="container">
                                    <h3 class="strict-voice">Arch-nemesis</h3>
                                    <p><?= $chosenFighter['name'] ?> is going to take down <?= $versus['name'] ?> </p>
                                </div>

                                <picture>
                                    <img src="<?= $versus['portrait'] ?>" alt="enemy">
                                </picture>
                            </article>
                        </a>
                    <?php } ?>
                    <?php if (isset($friend)) {
                    ?>
                        <a href="?page=detail&id=<?= $friend['id'] ?>">
                            <article class="friend relation">
                                <div class="container">
                                    <h3 class="strict-voice">Ally</h3>
                                    <p><?= $chosenFighter['name'] ?> is ready to battle with <?= $friend['name'] ?> </p>
                                </div>

                                <picture>
                                    <img src="<?= $friend['portrait'] ?>" alt="friend">
                                </picture>
                            </article>
                        </a>
                    <?php }
                    ?>

                </text-content>
            </fighter-page>

        <?php } else { ?>

            <h1?> No Fighter found. </h1>


            <?php } ?>
        </inner-column>
    </section>