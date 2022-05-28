<style>
    div{
        width: 200px;
        height:200px;
        background-color: <?=$background?>
    }
</style>

<?php include('pocket-monsters.php')?>

<?php 

foreach ($pocketMonsters as $pokemon){

    $type = $pokemon['type'][0];
    $name = $pokemon['name']['english'];

if($type == 'Fire') {

    echo '<div class =' . "$type" . ' style="background-color:rgb(230,94,76)"> <h2>'. $name .'</h2> </div>';
 
} else if ($type == 'Water') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(109,172,248)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Grass'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(158,214,100)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Fighting') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(159,90,77)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Normal'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(190,190,177)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Flying') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(131,161,248)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Poison'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(160,97,158)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Ground') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(233,203,106)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Rock'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(204,190,124)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Bug') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(198,210,75)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Ghost'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(123,118,210)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Electric') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(250,230,95)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Psychic'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(231,109,177)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Ice') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(170,239,252)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Dragon'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(135,119,247)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Dark') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(138,107,89)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Steel'){ 
    echo '<div class =' . "$type" . ' style="background-color:rgb(195,194,215)"><h2>'. $name .'</h2></div>';
 
} else if ($type == 'Fairy') { 
    echo '<div class =' . "$type" . ' style="background-color:rgb(239,176,250)"><h2>'. $name .'</h2></div>';

} else {
    
    echo '<div class =' . "$type" . 'style="background-color:black"<h2>'. $name .'</h2> needs a type </div>';
}



} ?> 







