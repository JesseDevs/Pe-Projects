<row-cards>

    <text-content>
        <p class='intro'><?= $section['intro'] ?></p>
        <h3 class="heading loud-voice"><?= $section['heading'] ?></h3>

    </text-content>

    <div class="row">

        <?php foreach ($section['cards'] as $card) { ?>
            <h4 class="another-voice"><?= $card['title'] ?></h4>
            <p><?= $card['detail'] ?></p>

        <?php } ?>

    </div>

    <action-links>
        <?php foreach ($section['actions'] as $link) { ?>
            <a href="<?= $link['link'] ?>"> <?= $link['title'] ?> </a>
        <?php } ?>
    </action-links>


</row-cards>