<module>

    <module-header>
        <h2>Heading level 2 small</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio dignissimos qui impedit eum quaerat repudiandae est.</p>
    </module-header>

    <ul class='articles'>
        <?php
        for ($x = 1; $x < 7; $x++) { ?>

            <li>
                <article>
                    <h3>Heading level 3 small</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio dignissimos qui impedit eum quaerat repudiandae est.</p>
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