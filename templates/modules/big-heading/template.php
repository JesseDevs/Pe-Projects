<?php
$heading = $section['heading'] ?? $projectData['title'] ?? ucfirst($formThing['title']);

$intro = $section['intro'] ?? $formThing['intro'];
?>

<big-heading>
    <h1 class="roar-voice"><?= $heading ?></h1>
    <p class="intro"><?= $intro ?></p>
    <?php if (isset($section['image'])) { ?>
        <img src=" <?= $section['image'] ?>" alt="thing" loading='lazy'>

    <?php } ?>
</big-heading>