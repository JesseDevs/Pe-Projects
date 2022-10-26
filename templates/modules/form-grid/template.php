    <?php
    $heading = $section['heading'] ?? "Exercise Grid";
    $intro = $section['intro'] ?? "Check it out!";
    ?>

    <form-grid>

        <div class="change-form">
            <span class='chant-voice'>PHP</span>
            <label class="switch">
                <input type="checkbox" id="switch" name="accept" value="yes">
                <span class="slider round"></span>
            </label>
            <span class='chant-voice'>JS</span>
        </div>

        <text-content>

            <h2 class='yell-voice'><?= $heading; ?></h2>
            <p class=' form-intro intro'><?= $intro; ?></p>
        </text-content>

        <nav class='php'>
            <ul>
                <?php foreach ($section['items'] as $form) { ?>
                    <li><a href="?page=form&id=<?= $form["id"] ?>" class=' action-link'"><?= $form['title'] ?></a></li>

                <?php } ?>
            </ul>
        </nav>

        <nav class='js'>
            <ul>
                <?php foreach ($section['jsItems'] as $form) { ?>
                    <li><button data-route=" <?= $form['title'] ?>Form" class=" action-link"><?= $form['button'] ?></button></li>

                <?php } ?>
            </ul>

        </nav>

    </form-grid>