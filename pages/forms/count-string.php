<main>
    <inner-column>
        <section class='four'>
            <?php

            if (isset($_POST['submitted'])) {
                $string = $_POST['string'];
                $results = strlen($string);

                if ($results == 0) {

                    $results = "Type something"; ?>

                    <article class='feedback'>
                        <p><?= $results ?></p>
                    </article>

                <?php } else { ?>

                    <article class='feedback'>

                        <p>You typed: <strong><?= $string ?></strong></p>
                        <p>That string has <strong><?= $results ?></strong> characters.</p>

                    </article>
            <?php }
            }
            ?>



            <form action="" method="post">

                <h2>Going to count the characters in your word.</h2>

                <article class="field">
                    <div class="container">
                        <label for="">Type a word? Or phrase?</label>
                        <input type="text" name='string' required>
                    </div>
                </article>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

        </section>
    </inner-column>
</main>