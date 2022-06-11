<?php

foreach ($colors as $color) { ?>

    <li class='colors <?= lcfirst($color) ?>'>
        <input type="radio" name="color" id="">
        <p><?= ucfirst($color) ?></p>

    </li>

<?php } ?>