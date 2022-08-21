<about-card>
    <h2 class='yell-voice'><?= $section['heading']; ?></h2>
    <p class='intro'><?= $section['intro']; ?></p>
    <text-content>

        <?php 
        foreach ($section['details'] as $detail){ 
            ?>

            <p> <?= $detail ?></p>
        <?php } ?>

        <?php foreach ($pageData['ad'] as $ad){ ?>
            <a class="about-blog" href ='<?= $ad["blog"]?>'><?= $ad["intro"]?></a>
        <?php } ?>


    </text-content>
    <div class="image-container">
        <picture class="about-image">
            <?php foreach ($section['images'] as $image){?>

                <img src="<?= $image?>" alt="Me">

            <?php } ?>
        </picture>
    </div>
</about-card>




