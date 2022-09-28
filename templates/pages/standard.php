<?php

$resume = file_get_contents('data/resume.json');
$resumeData = json_decode($resume, true);

$goals = file_get_contents('data/goals.json');
$goalsData = json_decode($goals, true);

$json = file_get_contents('data/form.json');
$formData = json_decode($json, true);

?>

<main class="page-content <?= $page ?>">
    <?php foreach ($pageData['sections'] as $section) { ?>

        <section class="<?= $section["module"] ?>">
            <inner-column>

                <?php
                include('templates/modules/' . $section["module"] . '/template.php');
                ?>

            </inner-column>
        </section>
    <?php } ?>

</main>