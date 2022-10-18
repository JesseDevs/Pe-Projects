<double-text>
    <?php if (isset($article["title"])) { ?>
        <h3 class="attention-voice">
            <?= $article["title"] ?>
        </h3>
    <?php } ?>
    <p>
        <?= $article["paragraphOne"] ?>
    </p>
    <p>
        <?= $article["paragraphTwo"] ?>
    </p>
</double-text>