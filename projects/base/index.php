<?php require("functions.php") ?>
<?php $mangas = initializeDatabase(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Reads. Book Catalog.</title>
    <meta name='description' content="Getting lost in the reads is only part of the journey.">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/manga/images/reeds.jpg">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include('templates/modules/site-menu/template.php'); ?>
    

    <main class="page-content">
        <?php renderPage($page); ?>
    </main>


    <!-- <?php include('templates/modules/site-footer/template.php'); ?> -->


    <script src="file.js"></script>
</body>

</html>
