<main>
    <inner-column>
        <section class='three'>
            <?php



            $num1 = '';
            $num2 = '';

            if (isset($_POST['submitted'])) {

                if (isset($_POST['num1'])) {
                    if ($_POST['num1'] >= 0) {
                        $num1 = $_POST['num1'];
                    }
                }

                if (isset($_POST['num2'])) {
                    if ($_POST['num2'] >= 0) {
                        $num2 = $_POST['num2'];
                    }
                }

                $multiply = floatval($num1) * floatval($num2);
                $divide = floatval($num1) / floatval($num2);
                $add = floatval($num1) + floatval($num2);
                $subtract = floatval($num1) - floatval($num2);


            ?>
                <article class='feedback'>

                    <ul>
                        <li><?= $num1 ?> + <?= $num2 ?> = <?= $add ?></li>
                        <li><?= $num1 ?> - <?= $num2 ?> = <?= $subtract ?></li>
                        <li><?= $num1 ?> x <?= $num2 ?> = <?= $multiply ?></li>
                        <li><?= $num1 ?> / <?= $num2 ?> = <?= $divide ?></li>
                    </ul>

                </article>
            <?php } ?>

            <form action="" method="post">

                <h2>Lets do some simple math?</h2>

                <article class="field">
                    <div class="container">
                        <label for="">Number 1?</label>
                        <input type="number" name='num1' value='<?= $length ?>' required min='0'>
                    </div>
                </article>

                <article class="field">
                    <div class="container">
                        <label for="">Number 2?</label>
                        <input type="number" name='num2' value='<?= $width ?>' required min='0'>
                    </div>
                </article>

                <button type="submit" name='submitted' formtarget="_blank">Calculate</button>


            </form>

        </section>
    </inner-column>
</main>