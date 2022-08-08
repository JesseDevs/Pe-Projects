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
            <a class="blog" href ='$ad["blog"]'><?= $ad["intro"]?></a>
        <?php } ?>
    </text-content>
</about-card>




