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

        <h3><?= $product['brand'] ?></h3>

        <aside class="container">
            <picture>
                <img src="<?= $product['image'] ?>" alt="">
            </picture>
            <h2><?= $product['name'] ?></h2>
            <p class="attention-voice"><?= ucfirst($product['tagline']) ?></p>

            <ul>
                <?php include('color-data.php') ?>
            </ul>

            <form action="" method="post">
                <button type="submit" name='submitted'>Add To Cart</button>
            </form>
        </aside>

        <div class="details">
            <details>
                <summary>Description</summary>
                <p><?= $product['description'] ?></p>
            </details>
            <details>
                <summary>Features</summary>
                <ul>
                    <?php include('feature-data.php') ?>
                </ul>
            </details>
        </div>



    </article>

<?php } ?>