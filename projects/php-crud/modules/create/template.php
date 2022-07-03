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
            <field class="required">
                <field>
                    <label>Name<?php if ($hasName) { ?>
                        <span class='check'><?= $hasName ?></span>
                    <?php } ?></label>
                    <input type="text" name='name' maxlength='15' value='<?= $name ?>'>
                    <?php if ($nameError) { ?>
                        <p class='error'><?= $nameError ?></p>
                    <?php } ?>
                    <span>Enter your fighter name here</span>
                </field>
                <field>
                    <label>Quote</label>
                    <input type="text" name='quote' maxlength='40' required value='<?= $quote ?>'>
                    <span>What's a good battle quote?</span>
                </field>
            </field>
            <field class="required">
                <field>
                    <label>Playstyle</label>
                    <select name="playstyle">
                        <?php foreach ($playstyle as $style) { ?>
                            <option value="<?= $style['name'] ?>">
                                <?= $style['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <span>Playstyle info: <a <?php activePage("home") ?> href="?page=home">Here</a></span>
                </field>
                <field>
                    <label>Occupation</label>
                    <input type="text" name='occupation' maxlength='15'>
                    <span>A job to pay the bills</span>
                </field>
            </field>
            </div>

            <field class="full-width">
                <label>Description</label>
                <textarea rows="5" cols="35" name='description'></textarea>
                <span>Cool background story</span>
            </field>
            <field class="form-images">
                <field>
                    <label>Portrait</label>
                    <input type="file" name="portrait" accept="image/*" value='<?= $portait ?>'>
                    <span>Your main image</span>
                </field>
                <field>
                    <label>Alternate Costumes</label>
                    <input type="file" name="costumes" accept="image/*" multiple>
                    <span>Other images? Costumes?</span>
                </field>
            </field>
            <field>
                <label>Audio</label>
                <input type="file" name="audio" accept="audio/*">
                <span>Audio quote: Speak</span>
            </field>

            <field class="specials">

                <h4>Special Move One</h4>
                <field>
                    <label>Name Of The Move</label>
                    <input type="text" name='specials[0][0]' maxlength='20'>
                </field>

                <field>
                    <label>Image Of The Move</label>
                    <input type="file" name="specials[0][1]" accept="image/*">
                </field>
                <span>What's your first special move?</span>
            </field>

            <field class="specials">
                <h4>Special Move Two</h4>
                <field>
                    <label>Name Of The Move</label>
                    <input type="text" name='specials[1][0]' maxlength='20'>
                </field>

                <field>
                    <label>Image Of The Move</label>
                    <input type="file" name="specials[1][1]" accept="image/*">
                </field>
                <span>Got a second one?</span>
            </field>

            <field class="specials">
                <h4>Special Move Three</h4>
                <field>
                    <label>Name Of The Move</label>
                    <input type="text" name='specials[2][0]' maxlength='20'>
                </field>

                <field>
                    <label>Image Of The Move</label>
                    <input type="file" name="specials[3][0]" accept="image/*">
                </field>
                <span>How about a third?</span>
            </field>

            <button type="submit" name='add'>
                Create
            </button>
        </form>

    </inner-column>
</section>