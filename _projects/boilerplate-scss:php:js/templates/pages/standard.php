<main class="page-content">
    <?php foreach ($pageData['sections'] as $section) { ?>

        <section class="has-<?= $section["module"] ?>">
            <inner-column>

                <?php

                include('templates/modules/' . $section["module"] . '/template.php');

                ?>

            </inner-column>
        </section>
    <?php } ?>

</main>