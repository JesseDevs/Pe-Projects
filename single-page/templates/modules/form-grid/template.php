    <?php
    $heading = $section['heading'] ?? "Exercise Grid";
    $intro = $section['intro'] ?? "Check it out!";
    ?>

    <div class="row-container">
        <aside>

            <text-content>

                <h2 class='yell-voice'><?= $heading; ?></h2>
                <p class=' form-intro intro'><?= $intro; ?></p>
            </text-content>
        </aside>
        <aside>

            <nav class='php'>
                <ul>
                    <?php foreach ($section['items'] as $form) { ?>
                        <li><a href="?page=form&id=<?= $form["id"] ?> action-link"><?= $form['title'] ?></a></li>

                    <?php } ?>
                </ul>
            </nav>
        </aside>
        <aside>

            <nav class='js'>
                <ul>
                    <?php foreach ($section['jsItems'] as $form) { ?>
                        <li><a class="<?= $form['title'] ?> action-link" href=""><?= $form['button'] ?></a></li>

                    <?php } ?>
                </ul>
            </nav>
        </aside>

    </div>