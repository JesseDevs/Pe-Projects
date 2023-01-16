<section>
    <inner-column>

        <h1>This is an album list</h1>
        <ul>
            <?php
            $args = [
                'post_type' => 'album',
            ];
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                include(getFile('templates/modules/album-card/template.php'));
            endwhile;

            wp_reset_postdata(); ?>
        </ul>
    </inner-column>
</section>