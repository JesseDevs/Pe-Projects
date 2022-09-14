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
    <title>Jesse Felix Personal Site: <?= ucfirst($page); ?> Page</title>
    <meta name='description' content="<?= $pageData['intro'] ?>">
    <meta property="og:image" content="<?= $metaImage ?>">

    <link rel="stylesheet" href="style.css">

</head>

<body class='<?= $page ?>'>

    <?php
    include('templates/modules/site-menu/template.php');

    ?>


    <?php

    if (file_exists("templates/pages/" . $page . ".php")) {

        if ($page == 'home') { // home page
            include('templates/pages/home.php');
        }

        if ($page == 'about') { // about page
            include('templates/pages/about.php');
        }


        if ($page == 'projects') { // projects page
            include('templates/pages/projects.php');
        }

        if ($page == 'project') { //detail page
            include('templates/pages/project.php');
        }

        if ($page == 'writing') {
            include('templates/pages/writing.php');
        }

        if ($page == 'forms') {
            include('templates/pages/forms.php');
        }

        if ($page == 'form') {
            include('templates/pages/form.php');
        }

        if ($page == 'style') {
            include('templates/pages/style.php');
        }
    } else {
        $page = '404';

        $json = file_get_contents('data/pages/404.json');
        $pageData = json_decode($json, true);
        include('templates/pages/404.php');
    }


    ?>



    <?php
    include('templates/modules/site-footer/template.php');

    ?>


    <script src="file.js"></script>

</body>

</html>
