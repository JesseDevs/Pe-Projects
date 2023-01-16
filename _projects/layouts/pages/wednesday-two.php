<main class='<?= currentPage() ?>'>
    <inner-column>
        <h2 class='attention-voice'>Wednesday #2</h2>
        <module>

            <module-header>
                <p class='teaser'>Little Teaser</p>
                <h2 class='loud-voice'>Heading level 2 small</h2>
                <p class='intro-voice'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio.</p>
            </module-header>
            <div class="page-articles">

                <ul class='articles'>
                    <p class='teaser'>Little Teaser</p>
                    <?php

                    for ($x = 0; $x < 3; $x++) {
                        $open = 1;
                        if ($open == $x) {
                            $open = 'open';
                        }

                    ?>

                        <li>
                            <details <?= $open ?>>
                                <summary class='strict-voice'>Heading level 3 small</summary>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique.</p>
                            </details>
                        </li>
                    <?php } ?>
                </ul>

                <ul class='other-articles'>
                    <p class='teaser'>Little Teaser</p>
                    <?php
                    for ($x = 1; $x < 9; $x++) { ?>

                        <li>
                            <details>
                                <summary class='strict-voice'>Heading level 3 small</summary>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique.</p>
                            </details>
                        </li>
                    <?php } ?>
                </ul>
            </div>

        </module>


    </inner-column>
</main>