<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Workout Planner</title>
    <meta name='description' content="What's next?">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/workout-app/images/workout.jpg">

    <link rel="icon" href="data:;base64,iVBORwOKGO=" />

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include("templates/partials/header/template.php") ?>
    <main class="page-content ">
        <section>
            <inner-column class="main-container">

                <?php include("templates/partials/form/template.php") ?>

                <?php include("templates/partials/output/template.php") ?>

            </inner-column>
        </section>
    </main>

    <script src="script.js" type='module'></script>
</body>

</html>