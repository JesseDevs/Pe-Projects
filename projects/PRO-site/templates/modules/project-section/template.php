<project-section>
    <h2><?= $section['heading']; ?></h2>
    <text-content>
        <p class='intro'><?= $section['intro']; ?></p>
    </text-content>
    <?php foreach ($projectsData as $project) { ?>

        <?php
        include('templates/modules/project-card/template.php');
        ?>
    <?php } ?>
</project-section>

