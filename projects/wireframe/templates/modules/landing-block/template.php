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
    if ($section['type'] == "email") { ?>
        <email-input>

            <input type="email" placeholder="Email Address">


            <a href="#">
                SignUp
            </a>
        </email-input>
    <?php } ?>



</landing-block>