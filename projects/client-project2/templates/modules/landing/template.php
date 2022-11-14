<landing-block>
    <picture>

        <div class='border-one'></div>
        <div class='border-two'></div>
        <?php $images = $section["images"];
        ?>

        <source srcset="<?= $images["big-image"] ?>" media="(min-width: 500px)">
        <img src="<?= $images["small-image"] ?>" alt="" />
    </picture>

    <text-content>
        <h1 class="roar-voice">
            <?= $section['text'] ?>
        </h1>
    </text-content>

    <action-block>
        <?php foreach ($section['actions'] as $action) { ?>
            <a href="<?= $action["link"] ?>" target="_blank" rel=""><span><?= $action["link-name"] ?></span></a>
        <?php } ?>
    </action-block>

</landing-block>