<main class="page-content <?= $page ?>">
    <?php foreach ($pageData['sections'] as $section) { ?>

        <section>
            <inner-column>
                <?php
                include('templates/modules/' . $section["module"] . '/template.php');
                ?>
            </inner-column>

        </section>
    <?php } ?>
<!--     <section class="project-list">
        <inner-column>
            <ul>
                <?php 
                foreach ($projectsData as $project) { ?>
                    <li class="<?= $project['intro']?>">
                        <?php include('templates/modules/project-card/template.php'); ?>
                    </li>
                <?php } ?>

            </ul>
        </inner-column>
    </section> -->
</main>
