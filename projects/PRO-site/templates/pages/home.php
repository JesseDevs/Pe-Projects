<?php include('templates/modules/page-header/template.php'); ?>

<?php foreach ($pageData['sections'] as $section) { ?>

    <section>
        <inner-column>

            <?php
            include('templates/modules/' . $section["module"] . '/template.php');
            ?>

        </inner-column>
    </section>
<?php } ?>