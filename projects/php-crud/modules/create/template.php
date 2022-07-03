<section class='form'>
    <?php

    //bring in data
    $json = file_get_contents("data/playstyle.json");
    $playstyleData = json_decode($json, true);
    $playstyle = $playstyleData["playstyle"];

    $name = "";
    $quote = "";
    $job = "";
    $style = "";

    $nameError = false;
    $quoteError = false;
    $jobError = false;
    $styleError = false;

    // echo "<pre>";
    // var_dump($_SERVER);
    // echo "</pre>";

    //when the user clicks the button
    if (isset($_POST["add"])) {

        // $name = $_POST["name"];
        // $quote = $_POST["quote"];
        // $job = $_POST["job"];
        // $style = $_POST["style"];

        // $newFighter = [
        //     "name" => $name,
        //     "quote" => $quote,
        //     "job" => $job,
        //     "style" => $style,

        // ];

        //name
        if (isset($_POST["name"])) {
            $name = $_POST["name"];

            if (strlen($name) > 0) {
                //Create Fighter
                $newFighter = [
                    "name" => $name,
                ];
            } else {
                $nameError = "No name. No battle, bud.";
            }
        }

        //quote
        if (isset($_POST["quote"])) {
            $quote = $_POST['quote'];

            if (strlen($quote) > 0) {
                $newFighter = [
                    "quote" => $quote,
                ];
            } else {
                $quoteError = "Needs a cool phrase to yell..";
            }
        }

        //style
        if (isset($_POST["style"])) {
            $style = $_POST['style'];

            if (strlen($style) > 0) {
                $newFighter = [
                    "playstyle" => $style,
                ];
            } else {
                $styleError = "You need a style to evolve beyond it.";
            }
        }


        //job
        if (isset($_POST["job"])) {
            $job = $_POST['job'];

            if (strlen($job) > 0) {
                $newFighter = [
                    "occupation" => $job,
                ];
            } else {
                $jobError = "Fighting don't pay the bills..";
            }
        }


        writeData($newFighter);
        // if ($hasName && $hasQuote) {
        //     echo "nice";
        // } else {
        //     echo 'nothing';
        // }
    }

    ?>

    <h1 class="loud-voice">CREATE A FIGHTER</h1>

    <inner-column>

        <form method="POST" enctype="multipart/form-data">
            <field class="required">
                <field>
                    <label>Name<span class="asterisk">*</span></label>
                    <input type="text" name='name' maxlength='15' value='<?= $name ?>'>

                    <?php if ($nameError) { ?>
                        <span class='error'><?= $nameError ?></span>
                    <?php } else { ?>
                        <span>Enter your fighter name.</span>
                    <?php } ?>
                </field>
                <field>
                    <label>Quote<span class="asterisk">*</span></label>
                    <input type="text" name='quote' maxlength='40' value='<?= $quote ?>'>
                    <?php if ($quoteError) { ?>
                        <span class='error'><?= $quoteError ?></span>
                    <?php } else { ?>
                        <span>What's a good battle quote?</span>
                    <?php } ?>
                </field>
            </field>
            <field class="required">
                <field>
                    <label>Occupation<span class="asterisk">*</span></label>
                    <input type="text" name='job' maxlength='15' value='<?= $job ?>'>
                    <?php if ($jobError) { ?>
                        <span class='error'><?= $jobError ?></span>
                    <?php } else { ?>
                        <span>What's your job?</span>
                    <?php } ?>
                </field>
                <field>
                    <label>Playstyle<span class="asterisk">*</span></label>
                    <select name="style">
                        <?php foreach ($playstyle as $style) { ?>
                            <option value="<?= $style['name'] ?>">
                                <?= $style['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <span>Playstyle info: <a <?php activePage("home") ?> href="?page=home">Here</a>.</span>
                </field>
            </field>
            </div>

            <field>
                <label>Description</label>
                <textarea rows="5" cols="35" name='description'></textarea>
                <span>Cool background story please.</span>
            </field>
            <field class="form-images">
                <field>
                    <label>Portrait</label>
                    <input type="file" name="portrait" accept="image/*" value='<?= $portait ?>'>
                    <span>Your main image.</span>
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
                <span>Audio quote.</span>
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