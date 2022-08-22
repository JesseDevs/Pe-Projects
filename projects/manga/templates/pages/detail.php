<?php
$mangaData = getMangas()['mangas'];

foreach ($mangaData as $mangaDetail) {
    if ($mangaDetail['id'] == $_GET['id']) {
        $mangaData = $mangaDetail;
    }
}


?>

<h1 class="roar-voice"> <?= $mangaDetail['title'] ?></h1>

<span class="delete"><a href="?page=delete&id=<?= $mangaDetail['id'] ?>">Delete</a></span>
<span class="edit"><a href="?page=edit&id=<?= $mangaDetail['id'] ?>">Edit</a></span>