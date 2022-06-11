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

        ?>

            <section class='card'>

                <h4><?= $product['brand'] ?></h4>

                <aside class="container">
                    <picture>
                        <img src="<?= $product['image'] ?>" alt="">
                    </picture>

                    <h2><?= $product['name'] ?></h2>
                    <p class="attention-voice"><?= ucfirst($product['tagline']) ?></p>

                    <ul>
                        <?php include('color-data.php') ?>
                    </ul>

                    <h3><?= $product['price'] ?>"</h3>

                    <form>
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



            </section>

        <?php } ?>


    </inner-column>
</main>



</body>

</html>

<?php include('footer.php') ?>