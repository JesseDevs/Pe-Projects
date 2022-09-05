<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-block>
    <text-content>
        <h1 class="roar-voice"><?= $heading ?></h1>

        <p class='intro'> <?= $section["intro"] ?></p>
    </text-content>

    <action-links>
        <?php foreach ($section['actions'] as $link) { ?>
            <a href="<?= $link['link'] ?>"> <?= $link['title'] ?> </a>
        <?php } ?>
    </action-links>

</landing-block>