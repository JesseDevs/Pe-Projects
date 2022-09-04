<?php

$flipped = null;

if ($article["flipped"]) {
    $flipped = "flipped";
}

?>

<diptech class=' <?= $flipped ?>'>

    <picture>
        <img src="<?= $article["image"] ?>" alt="">
    </picture>

    <p>
        <?= $article["text"] ?>
    </p>

</diptech>