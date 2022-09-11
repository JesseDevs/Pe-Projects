<?php

$json = file_get_contents("data/pages/" . $page . ".json");
$pageData = json_decode($json, true);

?>

<main class="page-content">
    <?php foreach ($pageData['sections'] as $section) { ?>

        <section class='<?= $section["module"] ?>'>
            <inner-column>
                <?php
                include('templates/modules/' . $section["module"] . '/template.php');
                ?>
            </inner-column>

        </section>
    <?php } ?>
</main>