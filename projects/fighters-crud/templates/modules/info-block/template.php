<info-block>

    <text-content>
        <p><strong>Playstyle:</strong>&nbsp;<?= $chosenFighter['playstyle'] ?> </p>
        <p><strong>Occupation:</strong>&nbsp; <?= $chosenFighter['occupation'] ?>
        </p>

        <p><?= $chosenFighter['description'] ?></p>
    </text-content>


    <div class='specials'>
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
    </div>




    <ally-container>

        <?php displayEnemies($chosenFighter); ?>
        <?php displayFriends($chosenFighter); ?>
    </ally-container>

</info-block>