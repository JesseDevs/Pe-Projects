<?php


$name = null;
$message = null;
$template = '';



if (isset($_POST['submitted'])) {
    $name = $_POST['name'];
    $message = "Hello " . htmlspecialchars($name) . "! Nice to meet you!";

    $template = 'You typed: ' . $name;
}

?>

<form method="post" id="hello">

    <field>
        <label for="">What is your name?</label>
        <input type="text" name='name' value='<?= $name ?>' id="name" required>
    </field>

    <button class='action-link' type="submit" name='submitted' id="calculate">Calculate</button>


</form>

<div class='feedback'>

    <p><strong> <?= $message ?></strong> </p>
</div>

<script>
    const $helloForm = document.querySelector('#hello');

    promptHello = function() {
        const $nameInput = document.querySelector('#name');
        $helloForm.addEventListener('input', function(event) {

            var name = $nameInput.value;
            let message = '';

            if (name) {
                message = "Hello, " + capitalizeFirstLetter(name) + ". Nice to meet you!";
            } else if (name == '') {
                message = "Oh wait.. we're missing something..";
            };

            $feedback.querySelector("p:last-of-type strong").textContent = `${message}`;

        });
    }


    window.addEventListener('click', function(event) {
        if (event.target.matches("#switch")) {


            if ($helloForm) {
                promptHello();
            }

        }
    });
</script>