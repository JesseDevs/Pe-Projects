<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>[[insert Title]]</title>
    <meta name='description' content="[[Insert description]]">
    <meta property="og:image" content="images/default-meta.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <inner-column>

        <article-grid class='articles'>
            <text-content>
                <h2>Heading level 2 small</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio dignissimos qui impedit eum quaerat repudiandae est.</p>
            </text-content>


            <?php
            for ($x = 1; $x < 7; $x++) { ?>
                <article>
                    <h3>Heading level 3 small</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias neque nostrum similique odio dignissimos qui impedit eum quaerat repudiandae est.</p>
                </article>
            <?php } ?>
        </article-grid>
        <article-grid class='boxes'>

            <?php
            for ($x = 1; $x < 5; $x++) { ?>
                <div>

                </div>
            <?php } ?>
        </article-grid>


    </inner-column>
</body>

</html>