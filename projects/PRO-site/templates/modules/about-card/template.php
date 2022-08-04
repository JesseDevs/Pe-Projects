<about-card>
    <h2><?= $section['heading']; ?></h2>
    <p><?= $section['intro']; ?></p>
    <?php 
    foreach ($section['details'] as $detail){ 
        ?>

        <p> <?= $detail ?></p>
    <?php } ?>
</about-card>



