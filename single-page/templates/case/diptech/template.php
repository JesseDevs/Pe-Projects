<?php

$flipped = null;

if ($article["flipped"]) {
    $flipped = "flipped";
}

$article["title"]

?>



<diptech class=' <?= $flipped ?>'>

    <text-content>

        <?php if ($article["title"]) { ?>
            <h3 class="attention-voice">
                <?= $article["title"] ?>
            </h3>
        <?php } ?>

        <p>
            <?= $article["text"] ?>
        </p>
    </text-content>

    <picture>
        <img src="<?= $article["image"] ?>" alt="">
    </picture>


</diptech>