<main class='<?= currentPage() ?>'>

    <inner-column>
        <h2 class='attention-voice'>Monday</h2>
        <module>

            <module-header>
                <h2 class='loud-voice'>Heading level 2 small</h2>
                <p class='intro-voice'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio dignissimos qui impedit eum quaerat repudiandae est.</p>
            </module-header>

            <ul class='articles'>
                <?php
                for ($x = 1; $x < 7; $x++) { ?>

                    <li>
                        <article>
                            <h3 class='strict-voice'>Heading level 3 small</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique.</p>
                        </article>
                    </li>
                <?php } ?>
            </ul>
            <article-grid class='boxes'>

                <?php
                for ($x = 1; $x < 5; $x++) { ?>
                    <picture>
                        <img src="https://peprojects.dev/images/square.jpg" alt="">

                    </picture>
                <?php } ?>
            </article-grid>
        </module>

    </inner-column>

</main>