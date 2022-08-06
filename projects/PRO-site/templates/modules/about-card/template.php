<about-card>
    <h2><?= $section['heading']; ?></h2>
    <text-content>
        <p class='intro'><?= $section['intro']; ?></p>
        <?php 
        foreach ($section['details'] as $detail){ 
            ?>

            <p> <?= $detail ?></p>
        <?php } ?>

        <?php foreach ($pageData['ad'] as $ad){ ?>
            <a class="blog" href ='$ad["blog"]'><?= $ad["intro"]?></a>
        <?php } ?>
    </text-content>
</about-card>




