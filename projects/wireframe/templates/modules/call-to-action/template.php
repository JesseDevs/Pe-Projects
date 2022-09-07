<call-to-action>
    <text-content>
        <p class="intro"> <?= $section["intro"] ?></p>
        <h3 class="heading loud-voice"><?= $section['heading'] ?></h3>



    </text-content>

    <action-links>
        <?php foreach ($section['actions'] as $link) { ?>
            <a class='small-voice' href="<?= $link['link'] ?>">
                <?= $link['title'] ?>
                <div class="arrow">
                    <?php include('images/button-arrow.php') ?>
                </div>
            </a>
        <?php } ?>
    </action-links>

</call-to-action>