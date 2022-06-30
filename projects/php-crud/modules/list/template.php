<?php include('../php-crud/data/fighter-data.php');
function showErrors()
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}
showErrors(); ?>

<section class="street-fighter list-grid">
    <inner-column class='tight'>


        <h1 class='loud-voice'>CHOOSE YOUR FIGHTER</h1>


        <nav class='playstyle'>
            <a href="?page=list">Full Roster</a>
            <div class="dash">|</div>
            <a href="?page=list&playstyle=Shoto">Shoto</a>
            <div class="dash">|</div>
            <a href="?page=list&playstyle=Charge">Charge</a>
            <div class="dash">|</div>
            <a href="?page=list&playstyle=Grappler">Grappler</a>
            <div class="dash">|</div>
            <a href="?page=list&playstyle=Zoner">Zoner</a>
        </nav>

        <?php
        // Setting varibles we will use
        $playstyle = null;
        $filter = [];
        $results = [];

        //check if playstyle selected
        if (isset($_GET['playstyle'])) {
            $playstyle = $_GET['playstyle'];
        }

        //if it is then the varibale will be set
        if ($playstyle) {
            //loop through the array
            foreach ($fighters as $fighter) {
                // if fighter playstyle == playstyle selected then..
                if ($fighter['playstyle'] == $playstyle) {
                    //push (add) to the new $filter array
                    array_push($filter, $fighter);
                }
            }

            // make the original array = to new array
            $fighters = $filter;
        }

        // now our loop will only contain the filter fighters(elements)
        ?>

        <ul class='fighters-list'>
            <?php foreach ($fighters as $fighter) { ?>
                <li class='fighter <?= lcfirst($fighter['name']) ?> '>
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