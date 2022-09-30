<?php require('functions/form-backend.php') ?>
<section class='create-page'>
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

            <field class="form-images">
                <field>
                    <label>Portrait</label>
                    <input class="inputfile" id="ff" type="file" name="portrait" accept="image/*" value='<?= $portait ?>'>
                    <span>Your main image.</span>
                </field>
            </field>

            <button class='button' type="submit" name='add'>
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