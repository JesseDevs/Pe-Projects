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


        <div class="outlet" rel="outlet">
            <section>
                <inner-column>
                    <h2 class='strict-voice'>${siteName}</h2>

                    <p class='signin-intro'>
                        Let's get you started with account and then we could enter any channel with a topic you want to discuss.
                    </p>

                    <form action="">
                        <input type="text" name="username" placeholder="Username" value="Jesse" />

                        <input type="password" name="password" placeholder="Password" value="1234" />

                        <button type="submit" data-action='signIn'>Sign In</button>
                        <form>

                </inner-column>
            </section>

        </div>


    </main>

    <?php include('templates/modules/app-footer/template.php'); ?>

    <script src="file.js"></script>
</body>

</html>