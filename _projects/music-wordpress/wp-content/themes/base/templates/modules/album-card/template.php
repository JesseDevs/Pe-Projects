<album-card>

    <picture>
        <img src=" <?php the_field('art'); ?>" alt="">
    </picture>
    <h2 class='title'> <?php the_field('title'); ?></h2>
    <p class='year'> <?php the_field('year'); ?></p>

    <a href="<?php the_permalink(); ?>">more</a>

</album-card>