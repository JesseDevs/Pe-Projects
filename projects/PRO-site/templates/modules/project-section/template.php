<project-section>
    <h2><?= $section['heading']; ?></h2>
    <p><?= $section['intro']; ?></p>
    <?php foreach ($projectsData as $project) { ?>

        <?php
        include('templates/modules/project-card/template.php');
        ?>
    <?php } ?>
</project-section>

