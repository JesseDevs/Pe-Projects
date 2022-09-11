<?php include('functions.php');

$description = null;
$metaImage = null;

$metaImage = $pageData['metaImage'] ?? "https://peprojects.dev/alpha-4/jesse/projects/wireframe/images/meta/one.webp";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe Recreation: <?= ucwords($page); ?> Page</title>
    <meta name='description' content="<?= $pageData['intro'] ?>">
    <meta property="og:image" content="<?= $metaImage ?>">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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


    <script src="file.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/2.1.0/chroma.min.js"></script>
</body>

</html>