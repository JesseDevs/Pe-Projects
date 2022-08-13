<grid-blog>
  <h2 class='yell-voice'><?= $section['heading']; ?></h2>

  <text-content>
    <p class='intro'><?= $section['intro']; ?></p>
  </text-content>

  <ul>
    <?php foreach($section['items'] as $item) {?>
      <li>
        <?php include('templates/modules/blog-card/template.php')?>
      </li>

    <?php }?>
  </ul>

  <div class="blog">
    <iframe src="https://jessedevs.substack.com/embed"  height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe>
  </div>
</grid-blog>
