<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<missing-heading>
    <h1 class="roar-voice"><?= $heading ?></h1>
    <p class="intro"><?= $section['intro']?></p>

    <nav>
        <ul>
            <?php foreach ($section['links'] as $link){ ?>

                <li><a href="<?= $link['link']?>"><?= $link['title']?></a></li>
            <?php } ?>
        </ul>
    </nav>

</missing-heading>
