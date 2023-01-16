<?php include('header.php') ?>

<?php

// Pull in JSON data into our PHP build to create articles.

$json = file_get_contents("data.json");
$products_data = json_decode($json, true);
$products = $products_data["products"];
?>

<main>
    <inner-column>

        <?php

        foreach ($products as $product) {
            $features = $product["features"];
            $colors = $product["color"];

            if ($product['on-sale']) {
                $sale = 'sale';
            } else {
                $sale = "";
            }

        ?>

            <section class='card'>

                <h4><?= $product['brand'] ?></h4>

                <aside class="container">
                    <picture>
                        <img src="<?= $product['image'] ?>" alt="">
                    </picture>

                    <div class="info-wrapper">
                        <h2><?= $product['name'] ?></h2>
                        <p class="attention-voice"><?= ucfirst($product['tagline']) ?></p>
                        <ul class='colors'>
                            <?php include('color-data.php') ?>
                        </ul>
                        <h3 class="<?= $sale ?>"><?= $product['price'] ?>"</h3>
                        <form>
                            <button type="submit">Add To Cart</button>
                        </form>
                    </div>
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



            </section>

        <?php } ?>


    </inner-column>
</main>



</body>

</html>

<?php include('footer.php') ?>