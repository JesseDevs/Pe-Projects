<article-card>

    <?php if (isset($article['image'])) {
        $filepath = "images/" . $article['image'] . ".php";
    ?>
        <div class='feather'>
            <?php include($filepath); ?>
        </div>

    <?php } ?>

    <?php if (isset($article['number'])) { ?>
        <div class='number-circle'>
            <p class='number'><?= $article['number'] ?></p>
        </div>
    <?php } ?>

    <text-content>

        <h4 class="attention-voice"><?= $article['title'] ?></h4>
        <p class="small-voice"><?= $article['detail'] ?></p>
    </text-content>

</article-card>