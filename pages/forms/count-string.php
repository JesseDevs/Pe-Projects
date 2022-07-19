<main>
    <inner-column>
        <a href="?page=e4p">&#8592; E4P Home</a>
        <section class='form-page'>
            <?php

            $string = null;
            $results = null;

            if (isset($_POST['submitted'])) {
                $string = $_POST['string'];
                $results = strlen($string) . " characters";
            }
            ?>



            <form action="" method="post">

                <h2>Going to count the characters in your word.</h2>

                <field>

                    <label for="">Type a word? Or phrase?</label>
                    <input type="text" name='string'>

                </field>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

            <results class='feedback'>
                <?php
                if (isset($results) && $results == 0) {

                    $results = "Type something"; ?>

                    <article class='feedback'>
                        <p><?= $results ?></p>
                    </article>

                <?php } else { ?>
                    <h3> The Results</h3>
                    <p>You typed: <?= $string ?></p>

                    <p><strong> That string has: <?= $results ?></strong> </p>

                <?php } ?>
            </results>
        </section>

    </inner-column>
</main>