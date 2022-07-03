<?php


$json = file_get_contents("data/fighter.json");
$fighterData = json_decode($json, true);
$fighters = $fighterData["fighters"];

if (isset($_GET['playstyle'])) {
    $playstyle = $_GET['playstyle'];
}

?>

<header class='list-intro'>

    <h1 class='loud-voice'>CHOOSE YOUR FIGHTER</h1>


    <nav class='playstyle'>
        <a href="?page=list&playstyle=Shoto" class="<?= activeFighters('Shoto') ?>">Shoto</a>
        <div class="dash">|</div>
        <a href="?page=list&playstyle=Charge" class="<?= activeFighters('Charge') ?>">Charge</a>
        <div class="dash">|</div>
        <a href="?page=list&playstyle=Grappler" class="<?= activeFighters('Grappler') ?>">Grappler</a>
        <div class="dash">|</div>
        <a href="?page=list&playstyle=Zoner" class="<?= activeFighters('Zoner') ?>">Zoner</a>
        <div class="dash">|</div>
        <a href="?page=list" class="<?= activeFighters(null) ?>">Everyone</a>
    </nav>
</header>

<section class=" street-fighter list-grid">
    <inner-column class='tight'>
        <ul class='fighters-list'>
            <?php foreach ($fighters as $fighter) { ?>
                <li class='fighter <?= lcfirst($fighter['name']) ?> <?= isSelected($playstyle, $fighter['playstyle']) ?>'>
                    <a href="?page=detail&id=<?= $fighter['id'] ?>">
                        <fighter-card>
                            <h2>
                                <?= $fighter['name'] ?>
                            </h2>
                            <picture>
                                <img src="<?= $fighter['portrait'] ?>" alt="SFV: <?= ($fighter['name']) ?>">
                            </picture>
                        </fighter-card>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </inner-column>
</section>