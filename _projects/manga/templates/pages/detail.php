<?php

$currentManga = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $currentManga = getMangaById($id);
}


?>
<section class="detail">
    <inner-column>

        <?php
        include("templates/modules/detail-card/template.php");
        ?>


    </inner-column>
</section>