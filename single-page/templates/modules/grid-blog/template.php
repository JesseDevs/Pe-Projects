<div class="row-container">
  <aside>

    <text-content>
      <h2 class='yell-voice'><?= $section['heading']; ?></h2>


      <p class='intro'><?= $section['intro']; ?></p>
    </text-content>
  </aside>


  <?php foreach ($section['items'] as $item) { ?>


    <aside>
      <?php include('templates/modules/blog-card/template.php') ?>
    </aside>


  <?php } ?>


</div>