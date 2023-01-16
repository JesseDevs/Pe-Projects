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
            <text-content>

                <p class='tiny-voice'><?= $review['name'] ?></p>

                <?php if (isset($review['title'])) { ?>
                    <span class='small-voice'><?= $review['title'] ?></span>
                <?php } ?>
            </text-content>

        </div>

    <?php } ?>

    <?php if ($section['style']  == 'single') { ?>


        <picture class='image'>
            <img src="<?= $review['image'] ?>" alt="">
        </picture>

        <text-content>
            <p class="strict-voice"><?= $review['quote'] ?></p>
            <p class='name'><?= $review['name'] ?><span> -<?= $review['title'] ?></span></p>
        </text-content>

    <?php } ?>

</client-card>