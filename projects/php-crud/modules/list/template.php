<?php

//bring in data
$json = file_get_contents("data/fighter-data.json");
$fighterData = json_decode($json, true);
$fighters = $fighterData["fighters"];

// For future reference would be nice to make a header for each page element to give it nice styling outside of the inner-column
?>


<header class='list-intro'>

    <h1 class='loud-voice'>CHOOSE YOUR FIGHTER</h1>


    <nav class='playstyle'>
        <a href="?page=list&playstyle=Shoto">Shoto</a>
        <div class="dash">|</div>
        <a href="?page=list&playstyle=Charge">Charge</a>
        <div class="dash">|</div>
        <a href="?page=list&playstyle=Grappler">Grappler</a>
        <div class="dash">|</div>
        <a href="?page=list&playstyle=Zoner">Zoner</a>
        <div class="dash">|</div>
        <a href="?page=list">Everyone</a>
    </nav>
</header>

<section class="street-fighter list-grid">
    <inner-column class='tight'>


        <?php
        // Setting varibles we will use
        $playstyle = null;
        $filter = [];
        $results = [];

        //check if playstyle selected
        if (isset($_GET['playstyle'])) {
            $playstyle = $_GET['playstyle'];
        }

        function isSelected($chosenStyle, $fighterStyle)
        {
            if ($chosenStyle) {
                if ($chosenStyle == $fighterStyle) {
                    return "selected";
                }
            } else {
                return "selected";
            }
        }

        ?>

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