<?php
$heading = $section['heading'] ?? $projectData['title'];
?>

<big-heading>
    <h1 class="roar-voice"><?= $heading ?></h1>
    <p class="intro"><?= $section['intro']?></p>
    <?php if (isset($section['image'])){?>
        <img src=" <?= $section['image'] ?>"  alt="thing">

    <?php }?>
</big-heading>
