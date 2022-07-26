<main>
    <section class='form-page'>
        <inner-column>
            <a href="?page=e4p">&#8592; E4P Home</a>



            <?php

            // function format($variable)
            // {
            //     echo "<pre>";
            //     echo "<code>";
            //     print_r($variable);
            //     echo "</code>";
            //     echo "</pre>";
            // }

            // format($_POST);

            $length = '';
            $width = '';
            $area = null;
            $templateOne = "";
            $templateTwo = '';
            $final = '';

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
                $templateOne = 'The length is: ' .  $length;
                $templateTwo = 'The width is: ' .  $width;
                $final = "Thus, the area is: " . $area;
            }

            ?>

            <form action="" method="post">

                <h2>Calculate the area of the room?</h2>

                <article class="field">
                    <div class="container">
                        <label for="">What is the length of the room?</label>
                        <input type="number" name='length' value='<?= $length ?>' required min='0'>
                    </div>
                </article>

                <article class="field">
                    <div class="container">
                        <label for="">What is the width of the room?</label>
                        <input type="number" name='width' value='<?= $width ?>' required min='0'>
                    </div>
                </article>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

            <results class='feedback'>
                <h3> The Results</h3>
                <p> <?= $templateOne ?></p>
                <p> <?= $templateTwo ?> </p>

                <p><strong> <?= $final ?></strong> </p>
            </results>


        </inner-column>
    </section>
</main>