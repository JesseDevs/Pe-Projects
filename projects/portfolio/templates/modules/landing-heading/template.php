<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading>
    <h1 class="roar-voice"><?= $heading ?></h1>
    <text-content>
        <div class="intro"> <?= $section["intro"] ?></div>
        
        <p class="details"><?= $section["details"] ?></p>
    </text-content>

    <picture class="landing-image">

        <img src=" <?= $section['image'] ?>"  alt="comp">
    </picture>



    <svg class="arrows">

        <path stroke-linecap="round" class="a1" d="M0 0 L20 22 L40 0"></path>
    </svg>
    <svg class="arrows arrows-two">

        <path stroke-linecap="round" class="a1" d="M0 0 L20 22 L40 0"></path>
    </svg>


</landing-heading>
