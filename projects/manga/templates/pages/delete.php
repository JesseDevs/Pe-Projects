<?php
//retrieve value after &id=____
$currentManga = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $currentManga = getMangaById($id);
}


//open the database
//check to see if id in url matches id in database
$mangas = getMangas()["mangas"];


if (isset($_GET['id'])) {
    deleteManga($currentManga);
    header('Location: ?page=list');
} else {
    header('Location: ?page=list');
}
