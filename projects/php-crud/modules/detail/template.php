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

<section class='fighter-detail'>
    <inner-column>
        <fighter-page class='detail'>


            <div class="container">
                <picture class='portrait'>
                    <img src="<?= $chosenFighter['portrait'] ?>" alt="SFV:<?= $chosenFighter['name'] ?> ">
                </picture>
                <article-grid class='costumes'>
                    <?php
                    if (isset($chosenFighter['costumes'])) {
                        foreach ($chosenFighter['costumes'] as $costumes) { ?>
                            <picture>
                                <img src="<?= $costumes ?>" alt=''>
                            </picture>
                    <?php }
                    } ?>
                </article-grid>

                <em class='calm-voice'><?= $chosenFighter['quote'] ?></em>

                <audio controls>
                    <source src="<?= $chosenFighter['audio'] ?>" type='audio/wav'>
                    </source>
                </audio>


            </div>

            <text-content>
                <h2 class="attention-voice">SPECIALS</h2>
                <a class='specials-page' href="?page=specials&id=<?= $chosenFighter['id'] ?>">
                    <article-grid class='specials'>
                        <?php
                        if (isset($chosenFighter['specials'])) {
                            foreach ($chosenFighter['specials'] as $special) { ?>
                                <article>

                                    <h3 class='deep-voice'><?= $special['name'] ?></h3>
                                    <picture class='specials-display'>
                                        <!-- <img class="still" src=" <?= $special['still'] ?>" alt=""> -->
                                        <img class="gif" src=" <?= $special['image'] ?>" alt="">
                                    </picture>

                                </article>

                        <?php }
                        } ?>
                    </article-grid>
                </a>

                <div>
                    <p><strong>Playstyle:</strong>&nbsp;<?= $chosenFighter['playstyle'] ?> </p>
                    <p><strong>Occupation:</strong>&nbsp; <?= $chosenFighter['occupation'] ?>
                    </p>
                </div>

                <p><?= $chosenFighter['description'] ?></p>

                <?php displayEnemies($chosenFighter); ?>
                <?php displayFriends($chosenFighter); ?>

            </text-content>
        </fighter-page>

    </inner-column>
</section>