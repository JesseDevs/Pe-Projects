<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading>
    <h1 class="roar-voice"><?= $heading ?></h1>
    <div class="intro"> <?= $section["intro"] ?></div>

    <picture class="landing-image">

        <p class="details"><?= $section["details"] ?></p>

        <img src=" <?= $section['image'] ?>"  alt="comp">
    </picture>

    <svg class="arrows">
        <path stroke-linecap="round" class="a1" d="M0 0 L20 22 L40 0"></path>
    </svg>


</landing-heading>
