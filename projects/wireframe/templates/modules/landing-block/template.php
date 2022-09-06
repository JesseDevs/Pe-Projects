<?php
$heading = $section['heading'] ?? ucfirst($page);
?>

<landing-block>
    <text-content>
        <h1 class="roar-voice"><?= $heading ?></h1>

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
        <field>
            <input type="email" placeholder=" <?php include("images/mail.php"); ?><?= $section['placeholder'] ?>">
            <button> <?= $section['button'] ?> &#62; </button>
        </field>

    <?php } ?>



</landing-block>