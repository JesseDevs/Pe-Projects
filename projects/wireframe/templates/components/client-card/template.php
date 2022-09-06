<client-card>

    <?php if (isset($review['rating'])) { ?>
        <div class="star-box">
            <?php for ($x = 1; $x <= $review['rating']; $x++) {
                include('images/star.php');
            } ?>
        </div>
    <?php } ?>

    <?php if ($section['style'] == 'scroll') { ?>
        <div class="client-scroll">

            <p class="small-voice"><?= $review['quote'] ?></p>

            <picture>
                <img src="<?= $review['portrait'] ?>" alt="">
            </picture>

            <p class='tiny-voice'><?= $review['name'] ?></p>
        </div>
    <?php } ?>

    <?php if ($section['style']  == 'single') { ?>
        <div class="client-single">

            <picture>
                <img src="<?= $review['portrait'] ?>" alt="">
            </picture>

            <p class="strict-voice"><?= $review['quote'] ?></p>

            <p><?= $review['name'] ?><span>- <?= $review['title'] ?></span></p>
        </div>
    <?php } ?>

</client-card>