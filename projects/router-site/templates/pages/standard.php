<?php include('templates/modules/page-header/template.php'); ?>

<main class="page-content">
    <?php foreach ($pageData['sections'] as $section) {

        include('templates/modules/' . $section["module"] . '/template.php');
    } ?>
</main>