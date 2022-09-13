<article-card>

    <?php if (isset($article['image'])) {
        $filepath = "images/" . $article['image'] . ".php";
    ?>
        <div class='circle'>
            <?php include($filepath); ?>
        </div>

    <?php } ?>

    <?php if (isset($article['number'])) {
        $filepath = "images/numbers/" . $article['number'] . ".php";
    ?>
        <div class='circle number'>
            <?php include($filepath); ?>
        </div>
    <?php } ?>

    <text-content>

        <h4 class="attention-voice"><?= $article['title'] ?></h4>
        <p class="small-voice"><?= $article['detail'] ?></p>
    </text-content>

</article-card>