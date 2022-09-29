<?php

$fighters = getFighters();

$playstyle = null;

if (isset($_GET['playstyle'])) {
    $playstyle = $_GET['playstyle'];
}

?>

<header class='playstyle-menu'>

    <h1 class='loud-voice'>CHOOSE YOUR FIGHTER</h1>


    <nav class='playstyle'>
        <a href="?page=list&playstyle=Shoto" class="<?= activeFighters('Shoto') ?>">Shoto</a>

        <a href="?page=list&playstyle=Charge" class="<?= activeFighters('Charge') ?>">Charge</a>

        <a href="?page=list&playstyle=Grappler" class="<?= activeFighters('Grappler') ?>">Grappler</a>

        <a href="?page=list&playstyle=Zoner" class="<?= activeFighters('Zoner') ?>">Zoner</a>

        <a href="?page=list" class="<?= activeFighters(null) ?>">Everyone</a>
    </nav>

</header>

<section class="list-grid">
    <inner-column>
        <ul class='fighters-list'>
            <?php foreach ($fighters as $fighter) { ?>
                <li class='fighter <?= isSelected($playstyle, $fighter['playstyle']) ?>'>

                    <?php include('templates/modules/fighter-card/template.php') ?>

                </li>
            <?php } ?>
        </ul>
    </inner-column>
</section>