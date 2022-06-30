<?php include('../php-crud/data/playstyle-data.php'); ?>

<section class='landing'>
    <inner-column>
        <h1 class='loud-voice'>Welcome to fightcade </h1>
        <p>Fighters presented by ©CAPCOM</p>
        <picture>
            <img src="./images/logo.webp" alt="">
        </picture>


        <div class="action">
            <p>Find YOUR Fighter</p>
            <a href="?page=list">Enter Battleground</a>
        </div>

        <text-content>

            <h2 class="attention-voice">Who to choose?</h2>

            <article-grid>

                <?php foreach ($playstyle as $style) { ?>

                    <article>
                        <a href="<?= $style['page'] ?>">
                            <h3 class="strict-voice"><?= $style['name'] ?></h3>
                        </a>
                        <p><?= $style['description'] ?></p>
                    </article>
                <?php } ?>
            </article-grid>

        </text-content>

    </inner-column>
</section>