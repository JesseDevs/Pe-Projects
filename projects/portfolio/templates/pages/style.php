<?php

$projectsData = getProjectFile();


$resume = file_get_contents('data/resume.json');
$resumeData = json_decode($resume, true);

$goals = file_get_contents('data/goals.json');
$goalsData = json_decode($goals, true);


$forms = file_get_contents('data/form.json');
$formData = json_decode($forms, true);
?>

<main class="page-content <?= $page ?>">
    <?php foreach ($pageData['sections'] as $section) { ?>

        <section class="<?= $section["module"]?>">
            <inner-column>

                <?php
                include('templates/modules/' . $section["module"] . '/template.php');
                ?>

            </inner-column>
        </section>
    <?php } ?>

    <?php include('templates/modules/contact-form/template.php');?>




</main>
