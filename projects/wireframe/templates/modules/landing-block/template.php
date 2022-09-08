<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-block>
    <text-content>
        <h1 class="heading roar-voice"><?= $heading ?></h1>

        <p class='intro'> <?= $section["intro"] ?></p>
    </text-content>

    <?php
    if ($section['type'] == "links") { ?>
        <action-links>
            <?php foreach ($section['actions'] as $link) { ?>
                <a href="<?= $link['link'] ?>"> <?= $link['title'] ?> </a>
            <?php } ?>
        </action-links>

    <?php } ?>

    <?php
    if ($section['type'] == "email") { 
        include('templates/components/email-input/template.php');
    } ?>



</landing-block>
