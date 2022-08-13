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


</main>
