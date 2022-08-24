<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-heading>
    <text-content>
        <h1 class="roar-voice"><?= $heading ?></h1>

        <p class='intro'> <?= $section["intro"] ?></p>

        <p class="details"><?= $section["details"] ?></p>
    </text-content>

    <picture class="landing-image">

        <img src=" <?= $section['image'] ?>" alt="comp">
    </picture>

</landing-heading>