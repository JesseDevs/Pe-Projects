<?php include('modules/page-header/template.php'); ?>

<main class="page-content">
    <?php foreach ($pageData['sections'] as $section) {
        include('modules/page-section/template.php');
    } ?>
</main>