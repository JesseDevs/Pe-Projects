<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>What's the bill?</title>
    <meta name='description' content="stuff">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/manga/images/reeds.jpg">

    <link rel="icon" type="image/png" sizes="32x32" href="./images/wolf.png" />

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include('templates/modules/header/template.php') ?>

    <main class="page-content ">
        <section>
            <inner-column class="outlet" rel='outlet'>

                <!-- Stuff goes here. -->

            </inner-column>
        </section>

        <section class='totals-container'>
            <inner-column class='receipt'>
                <!-- final totals will be here displayed like a reciept -->

                <receipt-block>
                    <h2 class='yell-voice'>Receipt</h2>

                    <div>
                        <h4 class='attention-voice'>Sub Total </h4>
                        <output class='output-one'></output>
                    </div>
                    <div>
                        <h4 class='attention-voice'>Tip Amount </h4>
                        <output class='output-two'></output>
                    </div>
                    <div>
                        <h4 class='attention-voice'>Total </h4>
                        <output class='output-three'></output>
                    </div>
                </receipt-block>

            </inner-column>
        </section>
    </main>

    <footer>
        <inner-column>
            <action-block>
                <button data-route='home' id='home'>Home</button>
            </action-block>
        </inner-column>
    </footer>

    <script src="file.js"></script>
</body>

</html>