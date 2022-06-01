<?php include('style.php') ?>
<?php include('monster-factory.php') ?>

<?php

$bet = 2; //2

function double($money /*parameter*/){
    echo $money * 2;
}

//running the function:
double($bet); //4
double(10); //20
double(300); //600

?>

<?php

function recipe($crust, $sauce, $topping1, $topping2) {
    echo "<h2> Order </h2>";
    echo "<ol>";

        echo "<li>" .$crust . "</li>";
        echo "<li>" .$sauce . "</li>";
        echo "<li>" .$topping1 . "</li>";
        echo "<li>" .$topping2 . "</li>";

    echo "</ol>";
    

    recipe("Thin", "Tomato", "Olives", "Mushrooms");
    recipe("Pan-tossed", "Tomato", "Pepperoni", "Bacon"); 
}

?>