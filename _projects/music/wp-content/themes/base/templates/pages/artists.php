<section>
    <inner-column>

        <h1>This is an artist list</h1>
        <ul>
            <?php
            $args = [
                'post_type' => 'artist',
            ];
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                include(getFile('templates/modules/artist-card/template.php'));
            endwhile;

            wp_reset_postdata(); ?>
        </ul>
    </inner-column>
</section>