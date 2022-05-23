<html>
    <head>
        <style>
            header{
                color:red;
            }

            .madlib-one{
                line-height:1.5;
                color:green;
                background-color:black;
                padding: 30px;
                border: 3px solid gray;
                font-size: 1.3rem;
            }

            .madlib-two{
                line-height:1.4;
                color:blue;
                background-color:gray;
                padding: 30px;
                border: 3px solid black;
                font-size: 1.3rem;
            }
        </style>
    </head>

    <header>
        I'm a header
    </header>

    <body>
        <?php

            /*

            <?php echo $variable; ?>
            <?=$variable?>

            */

            $personOne = "Jesse";
            $personTwo = "Diana";
            $animalOne = "Tiger";
            $animalTwo= "Gorilla";
            $adjective = "Galantly";
            $verb ="Jumping";
            $pastVerb ="Ran";
            $adverb ="Quickly";
            $snack ="Nachos";

            echo "<p class='madlib-one'>Today I went to the zoo. I saw a " . $animalOne . " " . $verb . " up and down in its tree. He " . $pastVerb . " " . $adverb . " through the large tunnel. I got some peanuts and passed
            them through the cage to a gigantic gray " . $animalTwo . " towering above my head. Feeding that animal made me hungry. I went to get a " . $snack . " It filled my stomach.</p>"
        ?>

            <p class='madlib-two'>Today I went to the zoo. I saw a <?=$animalOne?> <?=$verb?> up and down in its tree. He <?$pastVerb?> <?=$adverb?> through the large tunnel. I got some peanuts and passed them through the cage to a gigantic gray <?=$animalTwo?> towering above my head. Feeding that animal made me hungry. I went to get a <?=$snack?> It filled my stomach.</p>
    </body>

</html>
