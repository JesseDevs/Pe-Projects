<general-diptech class="container">

    <picture class='portrait'>
        <img src="<?= $chosenFighter['portrait'] ?>" alt="SFV:<?= $chosenFighter['name'] ?> ">
    </picture>
    <div class='costumes'>
        <?php
        if (isset($chosenFighter['costumes'])) {
            foreach ($chosenFighter['costumes'] as $costumes) { ?>
                <picture>
                    <img src="<?= $costumes ?>" alt=''>
                </picture>
        <?php }
        } ?>
    </div>

    <em class='calm-voice'><?= $chosenFighter['quote'] ?></em>

    <div class="audio-container">

        <audio controls>
            <source src="<?= $chosenFighter['audio'] ?>" type='audio/wav'>
            </source>
        </audio>
    </div>


</general-diptech>