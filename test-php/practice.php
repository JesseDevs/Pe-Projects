<h1>PHP Practice</h1>

<?php

    $nameOne = "Jesse";
    $year = 2022;
    $birthYear = 1994;
    $age = $year - $birthYear;
    $wait = "Who are you??";
    $myAge ="";

    if ($age > 25){
        $myAge = "old...";
    } else {
        $myAge = "young...";
    };


    if ($nameOne != "Jesse"){
        echo $wait;
    } else { 
        echo "<h2>Welcome " . $nameOne . "!!</h2>";
    }


?>    

<p>
    Hey I'm <?=$nameOne?>, I'm <?=$age?> years old. I'm <?=$myAge?>.
</p>

