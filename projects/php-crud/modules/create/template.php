<section class='form'>
    <?php

    //bring in data
    $json = file_get_contents("data/playstyle.json");
    $playstyleData = json_decode($json, true);
    $playstyle = $playstyleData["playstyle"];

    $fighters = getDatabase();

    $name = "";
    $quote = "";
    $job = "";
    $style = "";
    $description = '';
    $enemyData = "";
    $enemyId = [];
    $allyId = [];


    $nameError = false;
    $quoteError = false;
    $jobError = false;
    $styleError = false;
    $descriptionError = false;

    $fileDestination = null;
    $portrait = null;
    // things you need
    // enctype="multipportrait/form-data"
    // $_FILES
    // move_uploaded_file

    //when the user clicks the button
    if (isset($_POST["add"])) {
        //name
        if (isset($_POST["name"])) {
            $name = $_POST["name"];

            if (strlen($name) > 0) {
                $name = htmlspecialchars($_POST["name"]);
            } else {
                $nameError = "No name. No battle, bud.";
            }
        }

        //quote
        if (isset($_POST["quote"])) {
            $quote = $_POST['quote'];

            if (strlen($quote) > 0) {
                $quote = htmlspecialchars($_POST["quote"]);
            } else {
                $quoteError = "Needs a cool phrase to yell..";
            }
        }

        //style
        if (isset($_POST["style"])) {
            $style = $_POST['style'];

            if (strlen($style) > 0) {
                $style = htmlspecialchars($_POST["style"]);
            } else {
                $styleError = "You need a style to evolve beyond it.";
            }
        }

        //job
        if (isset($_POST["job"])) {
            $job = $_POST['job'];

            if (strlen($job) > 0) {
                $job = htmlspecialchars($_POST["job"]);
            } else {
                $jobError = "Fighting don't pay the bills..";
            }
        }

        //description
        if (isset($_POST["description"])) {
            $description = $_POST["description"];

            if (strlen($description) > 0) {
                $description = htmlspecialchars($_POST["description"]);
            } else {
                $descriptionError = "Needs an inspirational story..";
            }
        }

        //enemy
        if (isset($_POST["enemy"])) {
            $enemyData = $_POST["enemy"];

            $enemyInfo = explode("--", $enemyData);

            $enemyId = intval($enemyInfo[0]);
        }

        //ally
        if (isset($_POST["ally"])) {
            $allyData = $_POST["ally"];

            $allyInfo = explode("--", $allyData);

            $allyId = array_push($allyId, intval($allyInfo[0]));
        }

        if (isset($_FILES['portrait']) && $_FILES['portrait']['size'] > 0) {

            //store image file in variable
            $fileTmpLocation = $_FILES['portrait']['tmp_name'];

            //store file name in variable
            $fileName = $_FILES['portrait']['name'];

            $fileDestination = "images/uploads/" . $fileName;

            //move file to image folder
            move_uploaded_file($fileTmpLocation, $fileDestination);

            $portrait = "images/uploads/" . $fileName;


            // format($art);

        }


        $input = [

            // 'id'=> uniqid("a");
            'id' => rand(9, 1000),
            'name' => $name,
            'quote' => $quote,
            'occupation' => $job,
            'playstyle' => $style,
            'description' => $description,
            'enemy' => [$enemyId],
            'ally' => [$allyId],
            'portrait' => $portrait

        ];

        if (!empty($name) && !empty($quote) && !empty($job)) {
            array_push($fighters, $input);

            $newFighters = json_encode($fighters);
            file_put_contents(' data/fighter.json', $newFighters);
        }
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

            <field>
                <label>Description<span class="asterisk">*</span></label>
                <textarea rows="5" cols="35" name='description' require></textarea>
                <?php if ($jobError) { ?>
                    <span class='error'><?= $descriptionError ?></span>
                <?php } else { ?>
                    <span>Cool background story please.</span>
                <?php } ?>

            </field>
            <field class="required">
                <field>
                    <select name="enemy">
                        <option value="" disabled selected>Select Your Enemy?</option>
                        <?php foreach ($fighters as $fighter) { ?>
                            <option value="<?= $enemyId ?>">
                                <?= $fighter['id'] ?> -- <?= $fighter['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <span>Do you have any Enemies?</span>
                </field>
                <field>
                    <select name="ally">
                        <option value="" disabled selected>Select Your Ally?</option>
                        <?php foreach ($fighters as $fighter) { ?>
                            <option value="<?= $allyId ?>">
                                <?= $fighter['id'] ?> -- <?= $fighter['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <span>Who stands on your side?</span>
                </field>
            </field>
            <field class="form-images">
                <field>
                    <label>Portrait</label>
                    <input class="inputfile" id="ff" type="file" name="portrait" accept="image/*" value='<?= $portait ?>'>
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

<script>
    // when image selected
    var input = document.querySelector('#ff');

    input.addEventListener('change', function(event) {
        var preview = document.querySelector('picture img');
        var previewSource = URL.createObjectURL(input.files[0]);
        console.log(previewSource);
        preview.src = previewSource;
    });
    // insert image
</script>