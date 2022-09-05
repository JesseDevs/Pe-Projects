<about-card>
    <text-content>
        <h2 class='yell-voice'><?= $section['heading']; ?></h2>
        <p class='intro'><?= $section['intro']; ?></p>

    </text-content>
    <div class="image-container">
        <picture class="about-image">
            <?php foreach ($section['images'] as $image) { ?>

                <img src="<?= $image ?>" alt="Me">

            <?php } ?>
        </picture>
    </div>
</about-card>
