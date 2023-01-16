<info-block>
    <div class='costumes'>
        <?php
        if (isset($chosenFighter['costumes'])) {
            foreach ($chosenFighter['costumes'] as $costumes) { ?>
                <picture>
                    <img src="<?= $costumes ?>" alt=''>
                </picture>
        <?php }
        } ?>
    </div>

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



    <?php if (isset($chosenFighter['ally']) || isset($chosenFighter['enemy'])) { ?>
        <ally-container>

            <?php displayEnemies($chosenFighter); ?>
            <?php displayFriends($chosenFighter); ?>
        </ally-container>
    <?php } ?>

</info-block>