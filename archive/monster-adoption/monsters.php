<?php
    
    $codey =[
        "id" => 1,
        "name" => "Codey",
        "favoriteFood" => "doritos",
        "age" => 9,
        "adopted" => true,
        "portrait" => "images/codey.jpg",
        "hue" => .45,
        "hobby" => "play soccer",
    ];
    
    $fragoo =[
        "id" => 2,
        "name" => "Fragoo",
        "favoriteFood" => "cookies",
        "age" => 10,
        "adopted" => false,
        "portrait" => "images/fragoo.jpg",
        "hue" => .6,
        "hobby" => "run",
    ];

    $limabean =[
        "id" => 3,
        "name" => "Limabean",
        "favoriteFood" => "red vines",
        "age" => 5,
        "adopted" => true,
        "portrait" => "images/limabean.jpg",
        "hue" => .8,
        "hobby" => "jump rope",
    ];

    $missReadsAlot =[
        "id" => 4,
        "name" => "Miss Reads-Alot",
        "favoriteFood" => "ramen",
        "age" => 12,
        "adopted" => false,
        "portrait" => "images/miss-reads-a-lot.jpg",
        "hue" => .45,
        "hobby" => "read",
    ];
        
    $mrBanana =[
        "id" => 5,
        "name" => "Mr.Banana",
        "favoriteFood" => "twinkies",
        "age" => 8,
        "adopted" => false,
        "portrait" => "images/mr-banana.jpg",
        "hue" => .6,
        "hobby" => "play basketball",
    ];
        
    $orangina =[
        "id" => 6,
        "name" => "Orangina",
        "favoriteFood" => "oranges",
        "age" => 11,
        "adopted" => true,
        "portrait" => "images/orangina.jpg",
        "hue" => .8,
        "hobby" => "climb rocks",
    ];
        
    $shadow =[
        "id" => 7,
        "name" => "Shadow",
        "favoriteFood" => "only brown M&Ms",
        "age" => 7,
        "adopted" => false,
        "portrait" => "images/shadow.jpg",
        "hue" => .45,
        "hobby" => "play video games",
    ];

    $monsters = [$codey, $fragoo, $limabean, $missReadsAlot, $mrBanana, $orangina, $shadow];
?>

<?php

function monsterGenerator($id, $name, $favoriteFood, $age, $adopted, $portrait, $hue, $hobby){
    $monster = [
        "id" => $id,
        "name" => $name,
        "favoriteFood" => $favoriteFood,
        "age" => $age,
        "adopted" => $adopted,
        "portrait" => $portrait,
        "hue" => $hue,
        "hobby" => $hobby
    ];

    return $monster;
}

$chunky = monsterGenerator(8, 'Chunky','coconuts', 12, false, 'images/chunky.jpg', .6, 'play baseball' );

$monsters[]= $chunky;

?>