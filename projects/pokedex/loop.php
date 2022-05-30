<?php include('pocket-monsters.php') ?>

<?php

// $saurs =['bulba','ivy','vena'];
// $hue = 100;

// foreach ($saurs as $saur){

//     echo "<div style='background-color:hsl($hue,70%,50%)'>$saur</div>";
//     $hue += 20;

// }

$pokemonster = [
    3 => [
        'id' => 4,
        'name' => [
            'english' => 'Charmander',
            'japanese' => 'ヒトカゲ',
            'chinese' => '小火龙',
            'french' => 'Salamèche',
        ],
        'type' => [
            0 => 'Fire',
        ],
        'base' => [
            'HP' => 39,
            'Attack' => 52,
            'Defense' => 43,
            'Sp. Attack' => 60,
            'Sp. Defense' => 50,
            'Speed' => 65,
        ],
    ],
    4 => [
        'id' => 5,
        'name' => [
            'english' => 'Charmeleon',
            'japanese' => 'リザード',
            'chinese' => '火恐龙',
            'french' => 'Reptincel',
        ],
        'type' => [
            0 => 'Fire',
        ],
        'base' => [
            'HP' => 58,
            'Attack' => 64,
            'Defense' => 58,
            'Sp. Attack' => 80,
            'Sp. Defense' => 65,
            'Speed' => 80,
        ],
    ],
    5 => [
        'id' => 6,
        'name' => [
            'english' => 'Charizard',
            'japanese' => 'リザードン',
            'chinese' => '喷火龙',
            'french' => 'Dracaufeu',
        ],
        'type' => [
            0 => 'Fire',
            1 => 'Flying',
        ],
        'base' => [
            'HP' => 78,
            'Attack' => 84,
            'Defense' => 78,
            'Sp. Attack' => 109,
            'Sp. Defense' => 85,
            'Speed' => 100,
        ],
    ],
];

foreach ($pokemonster as $poke) {
    $main = $poke['type'][0];
    $second = '';

    if ($poke['type'][1] == true) {
        $second = $poke['type'][1];
    }

    echo $main;
    echo $second;
}

?>

<?php

// foreach ($pocketMonsters as $pokemon){


//     $types = $pokemon['type'];
//     $mainType = strtolower($types[0]);
//     $secondType = strtolower($types[1]);
//     $name = $pokemon['name']['english'];

//     
?>

<article class="poke-card <?= $mainType ?> ">
    <div class='circle <?= $secondType ?></div>
        <h2><?= $name ?> : <?= $mainType ?> </h2>
    </article>


?> 