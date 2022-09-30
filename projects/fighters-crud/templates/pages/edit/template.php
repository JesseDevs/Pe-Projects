<?php require('functions/edit-data.php') ?>

<?php

$fighters = getFighters();
?>

<header class="detail-header">
    <inner-column>
        <h2 class=' attention-voice'>
            Edit</h2>
    </inner-column>
</header>

<section class='edit-page'>
    <inner-column>
        <fighter-page>

            <?php include('templates/modules/general-diptech/template.php') ?>
        </fighter-page>



        <form method="POST">
            <h4 class='another-voice'>Update Information?</h4>
            <field>
                <label for="form">New name?</label>

                <input name="name" type="text" value="<?= $chosenFighter['name'] ?>">
            </field>

            <field>
                <label for="form">Different quote?</label>
                <input name="quote" type="text" value="<?= $chosenFighter['quote'] ?>">
            </field>

            <field>
                <label for="form">Change career?</label>
                <input name="job" type="text" value="<?= $chosenFighter['occupation'] ?>">
            </field>

            <field>
                <label for="form">Story changed?</label>
                <input name="description" type="text" value="<?= $chosenFighter['description'] ?>">
            </field>

            <button name="edit" type="submit" class="button" role="button"><span class="text">Update</span></button>
        </form>

    </inner-column>
</section>