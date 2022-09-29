<general-diptech class="container">

    <picture class='portrait'>
        <img src="<?= $chosenFighter['portrait'] ?>" alt="SFV:<?= $chosenFighter['name'] ?> ">
    </picture>

    <text-content>
        <p><strong>Playstyle:</strong>&nbsp;<?= $chosenFighter['playstyle'] ?> </p>
        <p><strong>Occupation:</strong>&nbsp; <?= $chosenFighter['occupation'] ?>
        </p>

        <p><?= $chosenFighter['description'] ?></p>
    </text-content>

    <em class='calm-voice'><?= $chosenFighter['quote'] ?></em>


    <?php if (isset($chosenFighter['audio'])) { ?>
        <div class="audio-container">

            <audio controls>
                <source src="<?= $chosenFighter['audio'] ?>" type='audio/wav'>
                </source>
            </audio>
        </div>
    <?php } ?>


</general-diptech>