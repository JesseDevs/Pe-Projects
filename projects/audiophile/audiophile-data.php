<?php

// Pull in JSON data into our PHP build to create articles.

$json = file_get_contents("data.json");
$products_data = json_decode($json, true);
$products = $products_data["products"];


foreach ($products as $product) {
    $features = $product["features"];
    $colors = $product["color"];

?>

    <article class='card'>
        <picture>
            <img src="<?= $product['image'] ?>" alt="">
        </picture>

        <aside class="container">
            <h2><?= $product['brand'] ?> <strong>-</strong> <?= $product['name'] ?></h2>

            <p class="attention-voice"><?= ucfirst($product['tagline']) ?></p>

            <ul>
                <?= include('feature-data.php') ?>
            </ul>

            <ul>
                <?= include('color-data.php') ?>
            </ul>


            <form action="" method="post">
                <button type="submit" name='submitted'>Add To Cart</button>
            </form>

            <details>
                <summary>Description</summary>
                <p><?= $product['description'] ?></p>
            </details>

        </aside>

    </article>

<?php } ?>