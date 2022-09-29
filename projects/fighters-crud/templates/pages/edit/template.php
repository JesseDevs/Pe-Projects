<?php require('functions/edit-data') ?>

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

            <label class='chant-voice' for="form">Update Information?</label>

            <field>

                <input name="name" type="text" value="<?= $chosenFighter['name'] ?>">
            </field>

            <field>

                <input name="quote" type="text" value="<?= $chosenFighter['quote'] ?>">
            </field>

            <field>

                <input name="job" type="number" value="<?= $chosenFighter['job'] ?>">
            </field>

            <field>

                <input name="description" type="number" value="<?= $chosenFighter['description'] ?>">
            </field>

            <button name="edit" type="submit" class="button" role="button"><span class="text">Update</span></button>
        </form>

    </inner-column>
</section>