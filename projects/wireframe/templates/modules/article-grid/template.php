<article-grid>

    <text-content>

        <?php if (isset($section['detail'])) { ?>
            <p><?= $section['detail'] ?></p>
        <?php } ?>

        <h3 class="loud-voice"><?= $section['heading'] ?></h3>
        <p><?= $section['intro'] ?></p>

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