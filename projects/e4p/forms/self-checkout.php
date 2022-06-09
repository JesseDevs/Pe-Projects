<?php include('../head.php'); ?>

<body>
    <inner-column>
        <section class='two'>


            <?php
            $priceOne = 0;
            $quantityOne = 0;

            $priceTwo = 0;
            $quantityTwo = 0;

            $priceThree = 0;
            $quantityThree = 0;

            $subTotal = 0;
            $tax = 0;


            if (isset($_POST['submitted'])) {

                if (isset($_POST['priceOne'])) {
                    if ($_POST['priceOne'] >= 0) {
                        $priceOne = $_POST['priceOne'];
                    }
                }

                if (isset($_POST['priceTwo'])) {
                    if ($_POST['priceTwo'] >= 0) {
                        $priceTwo = $_POST['priceTwo'];
                    }
                }

                if (isset($_POST['priceThree'])) {
                    if ($_POST['priceThree'] >= 0) {
                        $priceThree = $_POST['priceThree'];
                    }
                }

                if (isset($_POST['quantityOne'])) {
                    if ($_POST['quantityOne'] >= 0) {
                        $quantityOne = $_POST['quantityOne'];
                    }
                }

                if (isset($_POST['quantityTwo'])) {
                    if ($_POST['quantityTwo'] >= 0) {
                        $quantityTwo = $_POST['quantityTwo'];
                    }
                }

                if (isset($_POST['quantityThree'])) {
                    if ($_POST['quantityThree'] >= 0) {
                        $quantityThree = $_POST['quantityThree'];
                    }
                }


                $totalOne = floatval($priceOne) * floatval($quantityOne);
                $totalTwo = floatval($priceTwo) * floatval($quantityTwo);
                $totalThree = floatval($priceThree) * floatval($quantityThree);

                $subTotal = $totalOne + $totalTwo + $totalThree;
                $tax = $subTotal * .055;
                $total = $subTotal + $tax;

            ?>
                <article class="results">
                    <h2>Totals:</h2>

                    <article class='container'>
                        <p>The subtotal of Apples is: <?= $totalOne ?></p>
                        <p>The subtotal of Oranges is: <?= $totalTwo ?></p>
                        <p>The subtotal of Bananas is: <?= $totalThree ?></p>
                        <p>The subtotal of all items is:<?= $subTotal ?> </p>
                        <p>The tax on this purchase is: <?= $tax ?> </p>
                        <strong>
                            <p>The total is: <?= $total ?> </p>
                        </strong>
                    </article>



                </article>




            <?php } ?>

            <form action="" method="post">

                <h2>Self-Checkout</h2>

                <article class="field">
                    <div class="container">
                        <label for="">How many <em>Apples</em> are you taking?</label>
                        <input type="number" name='quantityOne' value='<?= $quantityOne ?>' min='0'>
                    </div>

                    <div class="container">
                        <label for="">Whats the price of the <em>Apples</em> you are taking?</label>
                        <input type="number" name='priceOne' value='<?= $priceOne ?>' min='0'>
                    </div>
                </article>

                <article class="field">
                    <div class="container">
                        <label for="">How many <em>Oranges</em> are you taking?</label>
                        <input type="number" name='quantityTwo' value='<?= $quantityTwo ?>' min='0'>
                    </div>

                    <div class="container">
                        <label for="">Whats the price of the <em>Oranges</em> you are taking?</label>
                        <input type="number" name='priceTwo' value='<?= $priceTwo ?>' min='0'>
                    </div>
                </article>

                <article class="field">
                    <div class="container">
                        <label for="">How many <em>Bananas</em> are you taking?</label>
                        <input type="number" name='quantityThree' value='<?= $quantityThree ?>' min='0'>
                    </div>

                    <div class="container">
                        <label for="">Whats the price of the <em>Bananas</em> you are taking?</label>
                        <input type="number" name='priceThree' value='<?= $priceThree ?>' min='0'>
                    </div>
                </article>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

        </section>
    </inner-column>
</body>

</html>