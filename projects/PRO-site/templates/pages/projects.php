<?php include('templates/modules/page-header/template.php'); ?>

<main class="page-content">
    <?php foreach ($pageData['sections'] as $section) { ?>

        <section>
            <inner-column>
                <?php
                include('templates/modules/' . $section["module"] . '/template.php');
                ?>
            </inner-column>

        </section>
    <?php } ?>
</main>

<ul>
    <?php foreach ($projectsData as $projects) { ?>
        <li>
            <a href="?page=project&id=<?= $project['id'] ?>">
                <?= $project['name']; ?>
            </a>
        </li>

    <?php } ?>

</ul>