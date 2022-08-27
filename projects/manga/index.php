<?php require("functions.php") ?>
<?php $mangas = initializeDatabase(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>[[insert Title]]</title>
    <meta name='description' content="[[Insert description]]">
    <meta property="og:image" content="images/default-meta.png">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include('templates/modules/site-menu/template.php'); ?>


    <main class="page-content">
        <?php renderPage($page); ?>
    </main>


    <?php include('templates/modules/site-footer/template.php'); ?>


    <script src="codepen.js"></script>
</body>

</html>