<main class='<?= currentPage() ?>'>
    <inner-column>
        <h2 class='attention-voice'>Wednesday</h2>
        <module>

            <module-header>
                <p class='teaser'>Little Teaser</p>
                <h2 class='loud-voice'>Heading level 2 small</h2>
                <p class='intro-voice'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio.</p>
            </module-header>

            <ul class='articles'>
                <?php
                for ($x = 1; $x < 4; $x++) { ?>

                    <li>
                        <picture>
                            <?php include('./images/circle.php') ?>
                        </picture>
                        <article>
                            <h3 class='strict-voice'>Heading level 3 small</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique.</p>
                        </article>
                    </li>
                <?php } ?>
            </ul>

        </module>


    </inner-column>
</main>