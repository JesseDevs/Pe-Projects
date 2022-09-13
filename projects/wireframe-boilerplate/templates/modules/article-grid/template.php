<article-grid>

    <text-content>

        <?php if (isset($section['detail'])) { ?>
            <p class="intro"><?= $section['detail'] ?></p>
        <?php } ?>

        <h3 class="heading loud-voice"><?= $section['heading'] ?></h3>
        <p class="intro"><?= $section['intro'] ?></p>

    </text-content>

    <?php if (isset($section['image'])) { ?>

        <picture>
            <img src="<?= $section['image'] ?>" alt="">
        </picture>

    <?php } ?>

    <div class="grid">

        <?php foreach ($section['articles'] as $article) {

            include('templates/components/article-card/template.php');
        } ?>

    </div>

</article-grid>