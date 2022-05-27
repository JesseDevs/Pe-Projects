<style>
    p{
        font-size: 1.3rem;
    }

    .red{
        color:red;
    }

    .blue{
        color:blue;
    }

    section.one {
        background-color: hsl(0,0%,0%);
        color:white;
        padding:20px;
    }
    
    section.two {
        background-color: hsl(100,0%,90%);
        color:black;
        padding:20px;
    }

    ol{
        display:flex;
        flex-direction:row;
        list-style: none;
        padding:0;
    }

    div.monster-card {
        padding: 20px;
        border: 2px solid red
    }
</style>

<section class='one'>
    
    <?php
    
    $array = ["one", 1, "three", "cat", true, false];
    
    echo "<p class ='red'>I have " . $array[0] . " " . $array[3] . ".</p>";
    
    $marshall =[
        "id" => 001,
        "name" => "Marshall",
        "favoriteFood" => "Doritos",
        "age" => 9,
        "adopted" => true,
        "portrait" => "https://peprojects.dev/images/portrait.jpg",
    ];
    
    $dom =[
        "id" => 002,
        "name" => "Dom",
        "favoriteFood" => "Cookies",
        "age" => 9,
        "adopted" => false,
        "portrait" => "https://peprojects.dev/images/portrait.jpg",
    ];

    $uly =[
        "id" => 003,
        "name" => "Uly",
        "favoriteFood" => "Red vines",
        "age" => 5,
        "adopted" => false,
        "portrait" => "https://peprojects.dev/images/portrait.jpg",
    ];

    $monsters = [$marshall, $dom, $uly];

    foreach ($monsters as $monster){

        $story = $monster['name'] . " is " . $monster['age'] . " years old and favorite food is " . $monster['favoriteFood'] . ".";
    
        $template = "<p id=" . $monster['id'] . ">" . $story . "</p>";
        
        echo $template;
    };

    ?>
    </section>

<section class="three">

    <?php

    echo "<ol>";
    
        foreach ($monsters as $monster){
    
            $name = $monster["name"];
            $id = $monster["id"];
            $story = "My favorite food is " . $monster['favoriteFood'] . " and  I am " . $monster['age'] . " years old.";
            $portrait = $monster['portrait'];
            $status = $monster['adopted'];

                // Set human readable status
            if ($status == 1){
                $status = "Adopted!";
            } else {
                $status = "Needs a home! ";
            }


            echo "<li class='monster'>";
    
            echo
            "<article class='" . $id ."'>".
                "<div class='monster-card' id ='$id'>" .
                    "<picture class ='portrait'>" .
                        "<img src= '" . $portrait . " ' width='200' >" .
                    "<h2 class='name'>" . $name . "</h2>" .
                    "<p class= 'story'>" . $story . "</p>" .
                    "<p class= 'status'>" . $status . "</p>" .
                "</div>".
            "</article>";

            echo "</li>";
        }

    echo "</ol>";

    ?>
</section>

    


<section class="two">
    <p class="blue" > I have <?=$array[1]?> <?=$array[3]?> ! </p>
    
    <p id='001'>
        The monster named <?=$marshall['name']?>'s favorite food is <?=$marshall['favoriteFood']?>. They are <?=$marshall['age']?> years old.
    </p>
</section>

<?php

$fruitsArray = ['strawberry', 'blueberry','orange', 'banana', 'pear'];

foreach ($fruitsArray as $fruit){
    echo $fruit;
}

?>