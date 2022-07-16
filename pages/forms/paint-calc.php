<main>

    <body>
        <inner-column>
            <section class='one'>

                <?php


                $length = '';
                $width = '';

                if (isset($_POST['submitted'])) {

                    if (isset($_POST['length'])) {
                        if ($_POST['length'] >= 0) {
                            $length = $_POST['length'];
                        }
                    }

                    if (isset($_POST['width'])) {
                        if ($_POST['width'] >= 0) {
                            $width = $_POST['width'];
                        }
                    }

                    $area = floatval($length) * floatval($width);
                    $paint = ceil($area / 350);

                ?>
                    <article class='feedback'>
                        <p> The ceiling of the room is <?= $area ?></p>
                        <p> You'll need <strong><?= $paint ?></strong> gallons to cover the entire ceiling</p>
                    </article>
                <?php } ?>

                <form action="" method="post">

                    <h2>How many gallons of paint do you need to cover the entire ceiling?</h2>

                    <article class="field">
                        <div class="container">
                            <label for="">What is the length of the ceiling?</label>
                            <input type="number" name='length' value='<?= $length ?>' required min='0'>
                        </div>
                    </article>

                    <article class="field">
                        <div class="container">
                            <label for="">What is the width of the ceiling?</label>
                            <input type="number" name='width' value='<?= $width ?>' required min='0'>
                        </div>
                    </article>

                    <button type="submit" name='submitted'>Calculate</button>


                </form>

            </section>
        </inner-column>
</main>