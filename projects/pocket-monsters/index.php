<?php include('functions.php'); ?>

<?php 

$endpoint = "https://pokeapi.co/api/v2";

$view = "none";
if (isset($_GET['view'])) {
    $view = $_GET['view'];
}

if ($_GET['view'] = 'detail'){

} else{
    $view = "list";
}

$json = file_get_contents("$endpoint/pokemon?limit=151");
$data = json_decode($json, true);
$monsters = $data['results'];


foreach($monsters as $monster){

    $url = $monster["url"];
    $urlParts = explode('/', $url);
    $id = $urlParts[6];
    $link = "view=detail&id=$id";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pokedex</title>
    <meta name='description' content="Gotta Catch 'Em All">
    <meta property="og:image" content="images/default-meta.png">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php

    include('templates/modules/site-menu/template.php'); 
    ?>


    <main class="page-content">
        <ul>
            <?php 

            foreach($monsters as $monster){

                $url = $monster["url"];
                $urlParts = explode('/', $url);
                $id = $urlParts[6];
                $link = "view=detail&id=$id";?>
                <li>

                    <a href="<?=$link?>">
                        <?=ucfirst($monster['name'])?>
                    </a>

                </li>

            <?php } ?>
        </ul>
    </main>


</body>

</html>
