<?php

// Pull in JSON data into our PHP build to create articles.
$json = file_get_contents('data.json');
$data = json_decode($json, true);
$pokedex = $data[0];

echo $pokedex;
?>

<?php

// $saurs =['bulba','ivy','vena'];
// $hue = 100;

// foreach ($saurs as $saur){

//     echo "<div style='background-color:hsl($hue,70%,50%)'>$saur</div>";
//     $hue += 20;

// }

foreach ($pokemons as $pokemon) {


    $types = $pokemon['type'];
    $mainClass = $types[0];
    $mainType = strtolower($types[0]);
    $secondType = '';
    $secondClass = "";

    if (isset($types[1])) {
        $secondType = strtolower($types[1]);
        $secondClass = $types[1];
    }
    $name = $pokemon['name']['english'];


?>

    <article class="poke-card <?= $mainType ?>">
        <h2><?= $name ?> : <?= $mainClass ?></h2>
        <div class='circle <?= $secondType ?>'>
            <p><?= $secondClass ?></p>
        </div>
    </article>

<?php } ?>