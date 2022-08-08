<grid-things>
  <h2 class='yell-voice'><?= $section['heading']; ?></h2>

  <text-content>
    <p class='intro'><?= $section['intro']; ?></p>
  </text-content>

  <ul>
    <?php foreach($section['items'] as $item) {?>
      <li>
        <a href="<?= $item['link']?>" target="_blank" >
          <picture>
            <img src="<?= $item['thumbnail']?>" alt="blog-image">
          </picture>
          <text-content>
            <h3 class='title chant-voice'><?= $item['title']?></h3>
            <p class='intro'><?= $item['intro']?></p>
            <?php if($item['podcast']){?>
              <p class='small skills'>Podcast Special</p>
            <?php } ?>
          </text-content>
        </a>
      </li>

    <?php }?>
  </ul>

  <div class="blog">
    <iframe src="https://jessedevs.substack.com/embed"  height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe>
  </div>
</grid-things>
