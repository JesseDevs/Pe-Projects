<main>
    <inner-column>
        <a href="?page=e4p">&#8592; E4P Home</a>
        <section class='form-page'>



            <?php

            $username = 'JohnDoe';
            $inputUsername = null;
            $password = '1020World';
            $inputPassword = null;
            $template = null;


            if (isset($_POST['submitted'])) {

                if (isset($_POST['username'])) {
                    if (strlen($_POST['username']) > 0) {
                        $inputUsername = $_POST['username'];
                    }
                }

                if (isset($_POST['password'])) {
                    if (strlen($_POST['password']) > 0) {
                        $inputPassword = $_POST['password'];
                    }
                }

                if ($inputUsername == $username && $inputPassword = $password) {
                    $template =  "You're logged in! Welcome!";
                } else {
                    $template = "Username or Password is incorrect. Try again.";
                }
            } ?>

            <form action="" method="post">

                <h2>Login Check!</h2>

                <field>

                    <label for="">Enter username:</label>
                    <input type="text" name='username' value='<?= $inputUsername ?>' required min='0'>

                    <span><em>*Hint: It's JohnDoe 😉</em></span>

                </field>

                <field>

                    <label for="">Enter password:</label>
                    <input type="password" name='password' value='<?= $inputUsername ?>' required min='0'>

                    <span><em>*Hint: It may or may not be - 1020World, try it.</em></span>

                </field>

                <button type="submit" name='submitted'>Calculate</button>


            </form>

            <results class='feedback'>
                <h3> The Results</h3>
                <p><?= $template ?></p>

            </results>


        </section>
    </inner-column>
</main>