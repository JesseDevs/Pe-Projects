<?php include('router/functions.php');

$description = null;
$metaImage = null;

$metaImage = $pageData['metaImage'] ?? 'images/details/computer.jpg';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Project</title>
    <meta name='description' content="Something - -">
    <meta property="og:image" content="https://peprojects.dev/images/landscape.jpg">

    <link rel="icon" type="image/png" sizes="32x32" href="./images/wolf.png" />

    <link rel="stylesheet" href="css/style.css">

</head>

<body class='<?= $page ?>'>

    <?php
    include('templates/modules/site-menu/template.php');

    renderPage();

    include('templates/modules/site-footer/template.php');
    ?>

    <script src="scripts/file.js"></script>

</body>

</html>