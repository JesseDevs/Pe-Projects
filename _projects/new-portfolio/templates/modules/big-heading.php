<?php
$heading = $section['heading'] ?? $projectData['title'] ?? ucfirst($formThing['title']);

$intro = $section['intro'] ?? $formThing['intro'];

if ($page == 'project') {
    $intro = $projectData['one-line'];
}
?>

<big-heading>
    <h1 class="roar-voice"><?= $heading ?></h1>
    <p class="intro"><?= $intro ?></p>
    <?php if (isset($section['image'])) { ?>
        <img src=" <?= $section['image'] ?>" alt="thing" loading='lazy'>

    <?php } ?>
</big-heading>