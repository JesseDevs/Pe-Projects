<?php include('functions.php');

$description = null;
$metaImage = null;

$metaImage = $pageData['metaImage'] ?? 'images/details/computer.jpg'


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe Recreation: <?= ucfirst($page); ?> Page</title>
    <meta name='description' content="<?= $pageData['intro'] ?>">
    <meta property="og:image" content="<?= $metaImage ?>">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class='<?= $page ?>'>

    <?php
    include('templates/modules/site-menu/template.php');

    ?>


    <?php

    if (file_exists("data/pages/" . $page . ".json")) {

        include('templates/pages/standard.php');
    } else {
        $page = '404';

        $json = file_get_contents('data/pages/404.json');
        $pageData = json_decode($json, true);
        include('templates/pages/standard.php');
    }


    ?>



    <?php
    include('templates/modules/site-footer/template.php');

    ?>

</body>

</html>