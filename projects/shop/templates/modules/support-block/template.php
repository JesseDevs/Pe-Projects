<support-block>


    <text-content>
        <?php if (isset($section['icon'])) { ?>

            <div class='feather'>
                <?php include('images/feather.php'); ?>
            </div>

        <?php } ?>

        <p class='intro'> <?= $section["support"] ?></p>

        <h2 class="heading yell-voice"><?= $section['heading'] ?></h2>

        <p class='intro'> <?= $section["intro"] ?></p>
    </text-content>

    <?php if (isset($section['action'])) { ?>

        <a href="<?= $section["action"]['link'] ?>"><?= $section["action"]['title'] ?></a>
    <?php } ?>


    <?php if (isset($section['vid'])) { ?>
        <picture class='page-video'>
            <img src="<?= $section["vid"] ?>" alt="">
        </picture>
    <?php } ?>


</support-block>