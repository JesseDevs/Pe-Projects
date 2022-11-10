<?php include('router/functions.php');

$description = null;
$metaImage = null;

$metaImage = $pageData['metaImage'] ?? 'images/details/computer.jpg';

if ($page == 'project') {
    $metaImage = $project['thumbnail'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jesse Felix Personal Site: <?= ucfirst($page); ?> Page</title>
    <meta name='description' content="<?= $pageData['intro'] ?>">
    <meta property="og:image" content="<?= $metaImage ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="./images/wolf.png" />

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="scripts/file.js"></script>

</body>

</html>