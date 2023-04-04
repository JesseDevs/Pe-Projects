<album-card>

    <h2 class='title'> <?php the_field('name'); ?></h2>
    <p class='year'> <?php the_field('stage_name'); ?></p>
    <p class='year'> <?php the_field('birth_date'); ?></p>

    <p class='year'> <?php the_field('origin'); ?></p>

    <a href="<?php the_permalink(); ?>">more</a>

</album-card>