<?php include('../head.php'); ?>

<body>
    <inner-column>
        <section class='one'>


            <?php

            $length = '0';
            $width = '0';

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
            ?>
                <p class='feedback'> The length is <?= $length ?></p>
                <p class='feedback'> The width is <?= $width ?> </p>
                <strong>
                    <p>Thus, the area is <?= $area ?> </p>
                </strong>
            <?php } ?>

            <form action="" method="post">

                <h2>Calculate the area of the room?</h2>

                <article class="field">
                    <div class="container">
                        <label for="">What is the length of the room?</label>
                        <input type="number" name='length' value='<?= $length ?>' min='0'>
                    </div>
                </article>

                <article class="field">
                    <div class="container">
                        <label for="">What is the width of the room?</label>
                        <input type="number" name='width' value='<?= $width ?>' min='0'>
                    </div>
                </article>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

        </section>
    </inner-column>
</body>

</html>