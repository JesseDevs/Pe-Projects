<?php include('header.php') ?>

<main>
    <inner-column>

    <?php
    
    $codey =[
        "id" => 001,
        "name" => "Codey",
        "favoriteFood" => "doritos",
        "age" => 9,
        "adopted" => true,
        "portrait" => "images/codey.jpg",
        "hue" => .45,
        "hobby" => "play soccer",
    ];
    
    $fragoo =[
        "id" => 002,
        "name" => "Fragoo",
        "favoriteFood" => "cookies",
        "age" => 10,
        "adopted" => false,
        "portrait" => "images/fragoo.jpg",
        "hue" => .6,
        "hobby" => "run",
    ];

    $limabean =[
        "id" => 003,
        "name" => "Limabean",
        "favoriteFood" => "red vines",
        "age" => 5,
        "adopted" => true,
        "portrait" => "images/limabean.jpg",
        "hue" => .8,
        "hobby" => "jump rope",
    ];

    $missReadsAlot =[
        "id" => 004,
        "name" => "Miss Reads-Alot",
        "favoriteFood" => "ramen",
        "age" => 12,
        "adopted" => false,
        "portrait" => "images/miss-reads-a-lot.jpg",
        "hue" => .45,
        "hobby" => "read",
    ];
        
    $mrBanana =[
        "id" => 005,
        "name" => "Mr.Banana",
        "favoriteFood" => "twinkies",
        "age" => 8,
        "adopted" => false,
        "portrait" => "images/mr-banana.jpg",
        "hue" => .6,
        "hobby" => "play basketball",
    ];
        
    $orangina =[
        "id" => 006,
        "name" => "Orangina",
        "favoriteFood" => "oranges",
        "age" => 11,
        "adopted" => true,
        "portrait" => "images/orangina.jpg",
        "hue" => .8,
        "hobby" => "climb rocks",
    ];
        
    $shadow =[
        "id" => 007,
        "name" => "Shadow",
        "favoriteFood" => "only brown M&Ms",
        "age" => 7,
        "adopted" => false,
        "portrait" => "images/shadow.jpg",
        "hue" => .45,
        "hobby" => "play video games",
    ];

    $monsters = [$codey, $fragoo, $limabean, $missReadsAlot, $mrBanana, $orangina, $shadow];

    foreach ($monsters as $monster){
    
        $name = $monster["name"];
        $id = $monster["id"];
        $portrait = $monster['portrait'];
        $status = $monster['adopted'];
        $hue = $monster['hue'];

            // Set human readable status
        if ($status == 1){
            $story = "I am " . $monster['age'] . " years old. I'm excited to be going to a happy home that lets me eat as much " . $monster['favoriteFood'] . " as I want!";
            $status = "Adopted!";
        } else {
            $story = "I am " . $monster['age'] . " years old. I love to " . $monster['hobby'] . "! My favorite thing to eat is " . $monster['favoriteFood'] . ". Yum! Can't get enough.";
            $status = "Needs a home! ";
        }

        echo
            "<article style='background-color: rgb(255 255 255/". $hue . ")' class='monster-card ". $id ."' id ='" .$id."'>" .
                "<picture class ='portrait'>" .
                    "<img src= '" . $portrait . " ' width='200' >" .
                "</picture>".
                "<div class='info-wrapper'>" . 
                    "<h2 class='name'>" . $name . "</h2>" .
                    "<p class= 'story'>" . $story . "</p>" .
                    "<p class= 'status'>" . $status . "</p>" .
                "</div>".
            "</article>";

    }

    ?>







    </inner-column>
</main>



</body>
</html>

<?php include('footer.php')?>
