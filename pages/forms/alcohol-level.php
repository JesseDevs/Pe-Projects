<main>
    <inner-column>
        <a href="?page=e4p">&#8592; E4P Home</a>
        <section class='form-page'>



            <?php

            $weight = null;
            $gender = null;
            $numberDrinks = null;
            $amountOfAlcohol = floatval($numberDrinks) * 12; //by volume of drinks consumed
            $timeSinceLastDrink = null; // hours
            $bac = null;
            $template = null;
            $adr = null;

            //BAC = ((total alcohol consumed in ounces) x 5.14/ body weight x alcohol distribution ratio) - .15 x hours since last drink

            //.73 for men
            // .66 for women

            if (isset($_POST['submitted'])) {

                if (isset($_POST['weight'])) {
                    if (($_POST['weight']) > 0) {
                        $weight = $_POST['weight'];
                    }
                }

                if (isset($_POST['gender'])) {
                    if (($_POST['gender']) == 'M') {
                        $adr = .73;
                    } else {
                        $adr = .66;
                    }
                }

                if (isset($_POST['numberDrinks'])) {
                    if (($_POST['numberDrinks']) > 0) {
                        $numberDrinks = $_POST['numberDrinks'];
                    }
                }

                if (isset($_POST['timeSinceLastDrink'])) {
                    if (($_POST['timeSinceLastDrink']) == 0) {
                        $timeSinceLastDrink = null;
                    } else {
                        $timeSinceLastDrink = $_POST['timeSinceLastDrink'];
                    }
                }


                $bac = (($amountOfAlcohol * 5.14) / (floatval($weight) * $adr)) - (.15 * $timeSinceLastDrink);

                if ($bac >= .08) {
                    $template = 'It is not legal to currently drive.';
                } else if ($bac >= .03) {
                    $template = 'You could legally drive but I mean...';
                } else {
                    $template = 'You’re good to drive!';
                }
            } ?>

            <form action="" method="post">

                <h2>Check Alcohol Levels.. Legally!</h2>

                <field>

                    <label for="">What's your weight, in pounds?</label>
                    <input type="number" name='weight' value='<?= $weight ?>' required min='0'>

                </field>

                <field>

                    <select name="gender" id="">
                        <option disabled selected>Select your gender?</option>

                        <option value="M">
                            Male
                        </option>
                        <option value="F">
                            Female
                        </option>
                    </select>

                </field>


                <field>

                    <label for="">How many drinks have you had? <strong>12 oz containers!</strong></label>
                    <input type="number" name='numberDrinks' value='<?= $numberDrinks ?>' required min='0'>

                </field>


                <field>

                    <label for="">How many hours has it been since your last drink?</label>
                    <input type="number" name='timeSinceLastDrink' value='<?= $timeSinceLastDrink ?>' min='0'>

                </field>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

            <results class='feedback'>
                <h3> The Results</h3>
                <p><?= $bac ?></p>
                <p><?= $template ?></p>

            </results>


        </section>
    </inner-column>
</main>