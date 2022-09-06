<support-block>
    <?php if (isset($section['image'])) { ?>

        <picture>
            <img src="<?= $section['image'] ?>" alt="">
        </picture>

    <?php } ?>

    <text-content>

        <p class='support'> <?= $section["support"] ?></p>

        <h1 class="roar-voice"><?= $section['heading'] ?></h1>

        <p class='intro'> <?= $section["intro"] ?></p>

        <?php if (isset($section['action'])) { ?>

            <a href="<?= $section["action"]['link'] ?>"><?= $section["action"]['title'] ?></a>
        <?php } ?>

    </text-content>

    <?php if (isset($section['vid'])) { ?>
        <picture>
            <img src="<?= $section["vid"] ?>" alt="">
        </picture>
    <?php } ?>


</support-block>