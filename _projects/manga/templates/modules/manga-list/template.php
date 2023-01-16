<?php

// Get all the mangas and is in reverse order
$mangas = getMangas()['mangas'];


?>


<manga-list>

    <h3 class='chant-voice'>Catalog of Books</h3>

    <ul>
        <?php foreach ($mangas as $manga) { ?>
            <li>
                <?php include("templates/modules/manga-card/template.php") ?>
            </li>
        <?php } ?>
    </ul>
</manga-list>