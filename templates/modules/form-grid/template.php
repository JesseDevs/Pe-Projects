    <?php
    $heading = $section['heading'] ?? "Exercise Grid";
    $intro = $section['intro'] ?? "Check it out!";
    ?>

    <form-grid>

        <h2 class='yell-voice'><?= $heading; ?></h2>
        <p class='intro'><?= $intro; ?></p>
        <nav>
            <ul>    
                <?php foreach ($formData as $form){?>
                    <li><a href="?page=form&id=<?= $form["id"]?>"><?= $form['title'] ?></a></li>

                <?php } ?>
            </ul>
        </nav>

    </form-grid>


