<client-card>

    <?php if (isset($review['rating'])) { ?>
        <div class="star-box">
            <?php for ($x = 1; $x <= $review['rating']; $x++) {
                include('images/star.php');
            } ?>
        </div>
    <?php } ?>

    <?php if ($section['style'] == 'scroll') { ?>


        <p class="quote"><?= $review['quote'] ?></p>

        <div class="profile">

            <picture class='portrait'>
                <img src="<?= $review['portrait'] ?>" alt="">
            </picture>
            <p class='tiny-voice'><?= $review['name'] ?></p>

        </div>

    <?php } ?>

    <?php if ($section['style']  == 'single') { ?>


        <picture class='image'>
            <img src="<?= $review['image'] ?>" alt="">
        </picture>

        <p class="strict-voice"><?= $review['quote'] ?></p>

        <p><?= $review['name'] ?><span>- <?= $review['title'] ?></span></p>

    <?php } ?>

</client-card>