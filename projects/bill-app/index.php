<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>What's the bill?</title>
    <meta name='description' content="stuff">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/bill-app/images/calc.jpg">

    <link rel="icon" type="image/png" sizes="32x32" href="images/dollar.png" />

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include('templates/modules/header/template.php') ?>

    <main class="page-content ">
        <inner-column>
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
                        <div>
                            <h4 class='attention-voice'>People</h4>
                            <output class='output-four'></output>
                        </div>
                        <div>
                            <h4 class='attention-voice'>Per Person</h4>
                            <output class='output-five'></output>
                        </div>

                    </receipt-block>

                </inner-column>
            </section>
        </inner-column>
    </main>
    <?php include('templates/modules/footer/template.php') ?>

    <script src="file.js"></script>
</body>

</html>