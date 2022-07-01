<?php include('../php-crud/data/fighter-data.php');

$chosenFighter = null;
$requestedId = null;

if (isset($_GET['id'])) {
    $requestedId = $_GET['id'];
}
// echo $requestedId; 
?>

<?php foreach ($fighters as $fighter) {
    if ($requestedId == $fighter['id']) {
        $chosenFighter = $fighter;
    }
}


?>
<section class='fighter-detail'>
    <inner-column>

        <?php if (isset($chosenFighter)) { ?>

            <h2 class=' attention-voice'>
                <?= $chosenFighter['name'] ?>
            </h2>
            <fighter-page class='detail'>


                <div class="container">
                    <picture class='portrait'>
                        <img src="<?= $chosenFighter['portrait'] ?>" alt="SFV:<?= $chosenFighter['name'] ?> ">
                    </picture>
                    <article-grid class='costumes'>
                        <?php foreach ($chosenFighter['costumes'] as $costumes) { ?>
                            <picture>
                                <img src="<?= $costumes ?>" alt=''>
                            </picture>
                        <?php } ?>
                    </article-grid>
                </div>

                <text-content>
                    <em class='calm-voice'><?= $chosenFighter['quote'] ?></em>

                    <audio controls>
                        <source src="<?= $chosenFighter['audio'] ?>" type='audio/wav'>
                        </source>
                    </audio>

                    <div>
                        <p><strong>Playstyle:</strong>&nbsp;<?= $chosenFighter['playstyle'] ?> </p>
                        <p><strong>Occupation:</strong>&nbsp; <?= $chosenFighter['occupation'] ?>
                        </p>
                    </div>
                    <p><?= $chosenFighter['description'] ?></p>

                    <h2 class="attention-voice">SPECIALS</h2>
                    <article-grid class='specials'>

                        <?php foreach ($chosenFighter['specials'] as $special) { ?>
                            <article>
                                <h3 class='deep-voice'><?= $special[0] ?></h3>

                                <picture>
                                    <img src="<?= $special[1] ?>" alt="">
                                </picture>
                            </article>
                        <?php } ?>
                    </article-grid>

                </text-content>
            </fighter-page>

        <?php } else { ?>

            <h1?> No Fighter found. </h1>


            <?php } ?>
    </inner-column>
</section>