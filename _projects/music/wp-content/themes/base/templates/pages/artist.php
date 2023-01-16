<?php
$name = get_field('name');
$birth = get_field('birth_date');
$origin = get_field('origin');
$secret = get_field('secret');

$portrait = get_field('portrait');

if ($portrait) {
    $portrait = $portrait['url'];
}


?>


<section class="page-section author-overview">
    <inner-column>

        <h1 class="loud-voice"><?php the_field('name'); ?></h1>
        <ul>

            <?php

            $featured_posts = get_field('manga');
            if ($featured_posts) : ?>

                <?php foreach ($featured_posts as $post) :

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><span>Manga: <?php the_field('title'); ?></span>
                        </a>
                    </li>

                <?php endforeach; ?>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>

        </ul>

    </inner-column>
</section>