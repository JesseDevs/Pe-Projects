<main>
    <inner-column>
        <section class='six'>
            <?php



            $principal = '';
            $interest = '';
            $time = '';

            if (isset($_POST['submitted'])) {

                if (isset($_POST['principal'])) {
                    if ($_POST['principal'] >= 0) {
                        $principal = $_POST['principal'];
                    }
                }

                if (isset($_POST['interest'])) {
                    if ($_POST['interest'] >= 0) {
                        $interest = $_POST['interest'];
                    }
                }

                if (isset($_POST['time'])) {
                    if ($_POST['time'] >= 0) {
                        $time = $_POST['time'];
                    }
                };

                $percent = floatval($interest) / 100;
                $rate = round($percent, 3, PHP_ROUND_HALF_UP);
                $amount = floatval($principal) * (1 + (floatval($rate) * floatval($time)));

            ?>
                <article class='feedback'>
                    <p>
                        After <?= $time ?> years at <?= $interest ?>% interest, the investment will be worth <strong>$<?= $amount ?></strong>.

                </article>

            <?php } ?>

            <form action="" method="post">

                <h2>Simple Interest Computing</h2>

                <article class="field">
                    <div class="container">
                        <label for="">What's the principal investment?</label>
                        <input type="number" name='principal' required min='0' placeholder="$1000">
                    </div>
                </article>

                <article class="field">
                    <div class="container">
                        <label for="">What is the yearly interest?</label>
                        <input type="number" name='interest' required min='0' placeholder="10%" step=".01">
                    </div>
                </article>

                <article class="field">
                    <div class="container">
                        <label for="">How long do you want to invest for?</label>
                        <input type="number" name='time' required min='0' placeholder="5">
                    </div>
                </article>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

        </section>
    </inner-column>
</main>