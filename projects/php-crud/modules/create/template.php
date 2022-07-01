<section class='form'>
    <?php

    //bring in data
    $json = file_get_contents("data/playstyle-data.json");
    $playstyleData = json_decode($json, true);
    $playstyle = $playstyleData["playstyle"];

    $name = "";
    $quote = "";

    $hasName = false;
    $hasQuote = false;

    $nameError = false;
    $quoteError = false;

    if (isset($_POST["add"])) {

        if (isset($_POST["name"])) {
            $name = $_POST["name"];

            if (strlen($name) > 0) {
                $hasName = '✅';
            } else {
                $nameError = "Bud. You're going to need a name to enter the battle.";
            }
        }

        if (isset($_POST["quote"])) {
            $quote = $_POST['quote'];

            if (strlen($quote) > 0) {
                $hasQuote = true;
            }
        }

        if ($hasName && $hasQuote) {
            echo "Has stuff";
        } else {
            echo 'nothing';
        }
    }
    ?>

    <h1 class="loud-voice">CREATE A FIGHTER</h1>

    <inner-column>

        <form method="POST">
            <field>
                <label>Name<?php if ($hasName) { ?>
                    <span class='check'><?= $hasName ?></span>
                <?php } ?></label>
                <input type=" text" name='name' maxlength='15' value='<?= $name ?>'>
                <?php if ($nameError) { ?>
                    <p class='error'><?= $nameError ?></p>
                <?php } ?>
            </field>
            <field>
                <label>Portrait</label>
                <input type="file" name="portrait" accept="image/*" value='<?= $portait ?>'>
            </field>
            <field>
                <label>Alternate Costumes</label>
                <input type="file" name="costumes" accept="image/*" multiple>
            </field>
            <field>
                <label>Quote</label>
                <input type="text" name='quote' maxlength='40' value='<?= $quote ?>'>
            </field>
            <field>
                <label>Audio</label>
                <input type="file" name="audio" accept="audio/*">
            </field>
            <field>
                <label>Playstyle</label>
                <select name="playstyle">
                    <?php foreach ($playstyle as $style) { ?>

                        <option value="<?= $style['name'] ?>">
                            <?= $style['name'] ?>
                        </option>
                    <?php } ?>

                </select>
            </field>

            <field>
                <label>Occupation</label>
                <input type="text" name='occupation' maxlength='15'>
            </field>

            <field>
                <label>Description</label>
                <textarea name='description'></textarea>
            </field>

            <field>
                <label>Special Move One</label>


                <label>Name Of The Move</label>
                <input type="text" name='specials[0][0]' maxlength='15'>

                <label>Image Of The Move</label>
                <input type="file" name="specials[0][1]" accept="image/*">
            </field>
            <field>
                <label>Special Move Two</label>


                <label>Name Of The Move</label>
                <input type="text" name='specials[1][0]' maxlength='15'>

                <label>Image Of The Move</label>
                <input type="file" name="specials[1][1]" accept="image/*">
            </field>
            <field>
                <label>Special Move Three</label>


                <label>Name Of The Move</label>
                <input type="text" name='specials[2][0]' maxlength='15'>

                <label>Image Of The Move</label>
                <input type="file" name="specials[3][0]" accept="image/*">
            </field>

            <button type="submit" name='add'>
                Create
            </button>
        </form>

    </inner-column>
</section>