<?php include('functions.php');

$description = null;
$metaImage = null;

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fighters</title>

    <meta name='description' content="CRUD Projects based on my favorite fighting game. Who's the next challenger??">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/fighters-crud/images/streetfighter-metadata.jpeg">

    <link rel="stylesheet" href="style.css">
</head>

<body class="<?= $page ?>">

    <?php include('templates/modules/site-menu/template.php'); ?>

    <main class='page-content'>

        <?php getTemplate($page); ?>

    </main>


</body>

</html>