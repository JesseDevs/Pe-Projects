<call-to-action>
    <text-content>
        <h3 class="loud-voice"><?= $section['heading'] ?></h3>

        <p class='intro'> <?= $section["intro"] ?></p>

    </text-content>

    <action-links>
        <?php foreach ($section['actions'] as $link) { ?>
            <a class='small-voice' href="<?= $link['link'] ?>"> <?= $link['title'] ?> </a>
        <?php } ?>
    </action-links>

</call-to-action>