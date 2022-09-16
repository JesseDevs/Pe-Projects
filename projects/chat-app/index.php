<?php require("functions.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chat app</title>
    <meta name='description' content="stuff">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/manga/images/reeds.jpg">

    <link rel="icon" type="image/png" sizes="32x32" href="./images/wolf.png" />

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include('templates/modules/app-header/template.php'); ?>


    <main class="page-content ">
        <aside class="channels hide" id='channel-menu'>
            <inner-column>
                <h2 class='another-voice'>Channels</h2>

                <ul>
                    <li>chit-chat</li>
                    <li>music</li>
                    <li>movies</li>
                    <li>television</li>
                    <li>games</li>
                </ul>
            </inner-column>

        </aside>

        <div class="outlet" rel="outlet">


        </div>


    </main>

    <?php include('templates/modules/app-footer/template.php'); ?>

    <script src="file.js"></script>
</body>

</html>