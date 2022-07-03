<?php

$json = file_get_contents("data/playstyle-data.json");
$playstyleData = json_decode($json, true);
$playstyle = $playstyleData["playstyle"];

?>

<header class='landing'>
    <inner-column>

        <h1 class='loud-voice'>Welcome to&nbsp;fightcade </h1>



        <div class="action">
            <a class='deep-voice' href="?page=list">Enter Battleground</a>
        </div>



    </inner-column>
</header>

<section class=' info'>
    <inner-column>

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