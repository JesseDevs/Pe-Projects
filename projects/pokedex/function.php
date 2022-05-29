<?php include('pocket-monsters.php')?>

<?php 

    // $saurs =['bulba','ivy','vena'];
    // $hue = 100;

    // foreach ($saurs as $saur){

    //     echo "<div style='background-color:hsl($hue,70%,50%)'>$saur</div>";
    //     $hue += 20;
        
    // }

?>

<?php 

foreach ($pocketMonsters as $pokemon){

    $type = $pokemon['type'][0];
    $class = strtolower($type);
    $name = $pokemon['name']['english'];

    ?>

    <div class="poke-card <?=$class?> ">
        <h2><?=$name?> : <?=$type?> </h2>
    </div>

<?php } ?>

?> 







