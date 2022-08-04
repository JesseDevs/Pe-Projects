<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading>
    <h1 class="roar-voice"><?= $heading ?></h1>
    <div class="intro"> <?= $section["intro"] ?></div>
    <p class="details"><?= $section["details"] ?></p>
    <picture class="landing-image">
        <img src=" <?= $section['image'] ?>"  alt="comp">
    </picture>
</landing-heading>
