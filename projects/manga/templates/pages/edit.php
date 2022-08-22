<?php
//retreive the id from the url &id=_____
$id = $_GET["id"];

//open the database and retrieve the mangas
$mangas = getMangas()["mangas"];

getMangaById($id);

?>
<section class="form">
    <inner-column>
        <?php
        //check if the id in the url matches the id in the json
        foreach ($mangas as $manga) {
            if ($id == $manga['id']) {
                include("templates/modules/edit/template.php");
            }
        }
        ?>
    </inner-column>
</section>

<section class="display-manga">
    <inner-column>
        <?php
        foreach ($mangas as $manga) {
            if ($id == $manga['id']) {
                include("templates/pages/detail.php");
            }
        }
        ?>
    </inner-column>
</section>