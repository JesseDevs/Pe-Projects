<?php

$string = null;
$results = null;
$typed = '';
$template = '';

if (isset($_POST['submitted'])) {
    $string = $_POST['string'];
    $results = strlen($string) . " characters";

    $typed = 'You typed: ' . $string;
    $template = 'That string has: ' . $results;
}

?>



<form action="" method="post">

    <field>

        <label for="">Type a word? Or phrase?</label>
        <input type="text" name='string'>

    </field>

    <button class='action-link' type="submit" name='submitted'>Calculate</button>


</form>

<results class='feedback'>
    <?php
    if (isset($results) && $results == 0) {

        $results = "Type something"; ?>

        <article>
            <p><?= $results ?></p>
        </article>

    <?php } else { ?>
        <h3 class="chant-voice"> The Results</h3>
        <p><?= $typed ?></p>

        <p><strong><?= $template ?></strong> </p>

    <?php } ?>


</results>