<grid-things>
  <h2 class='yell-voice'><?= $section['heading']; ?></h2>

  <text-content>
    <p class='intro'><?= $section['intro']; ?></p>
  </text-content>

  <ul>
    <?php foreach($section['items'] as $item) {?>
      <li>
        <a href="<?= $item['link']?>">
          <picture>
            <img src="<?= $item['thumbnail']?>" alt="blog-image">
          </picture>
          <text-content>
            <h3 class='title attention-voice'><?= $item['title']?></h3>
            <p class='intro'><?= $item['intro']?></p>
            <?php if($item['podcast']){?>
              <p class='small skills'>Podcast Special</p>
            <?php } ?>
          </text-content>
        </a>
      </li>

    <?php }?>
  </ul>
</grid-things>
