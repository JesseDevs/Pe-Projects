<!DOCTYPE html>
<?php require('router.php');
function getPage($page)
{
    if (isset($page)) {
        $template = 'pages/' . $page . '/index.php';
    }
    include($template);
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jesse. The one and only.</title>
    <meta name='description' content="Personal site: Business card">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/images/metadata.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="<?= $page ?>">
    <div class="overlay">

        <header>
            <inner-column>
                <nav>
                    <a href="?page=home"><span>Home</span></a>
                    <a href="?page=projects"><span>Projects</span></a>
                    <!-- 
                        <a href="?page=resume"><span>Resume</span></a> 
                    -->
                    <a href="?page=goals"><span>Goals</span></a>


                </nav>
            </inner-column>
        </header>


        <?php getPage($page); ?>


    </div>

</body>

</html>