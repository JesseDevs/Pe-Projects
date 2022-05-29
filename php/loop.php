<h1>Loop and Object practice</h1>

<?php

$exampleArray = ["Apex", 21, "Canada"];

$dogObject = [
    "name" => "Echo",
    "age" => 8 . " months",
    "emotions" => ["happy", "playful", "wild"],
    "breed" => "frenchie",
    "color" => "dark-gray blue",
];

$fruitArray = [
    "Apple",
    "Banana",
    "Cherries",
    "Date",
    "Elderberry",
];

//“for each item in this $array (now referenced as $item): do this” 

foreach ($fruitArray as $fruit){
    echo "<li>" . $fruit . "</li>";
}

?>


<p> <?=$dogObject['name']?> is my dog.<br>
He is <?=$dogObject['emotions'][0]?> .</p>


<h2> Another list </h2>

<?php

echo '<ol class="fruits">';
foreach ($fruitArray as $fruit){
    echo "<li class='fruit'>" . $fruit . "</li>";
}

echo "</ol>"


?>

<h2>Does this work?</h2>

<?php foreach ($fruitArray as $fruit){ ?>
    
    <li><?=$fruit?></li>

<?php } ?>

<br>

<section style='display:flex'>
<?php
    $color = [0, 20, 40, 60, 80, 100, 120, 140, 160, 180, 200, 220, 240, 260, 280, 300, 320, 340, 360];

    foreach ( $color as $hue){?>


    <div style= 'background-color:hsl(<?=$hue?>, 100%, 50%); width: 100px; height: 100px'></div>

        
<?php } ?>

</section>

