<?php
//retrieve value after &id=____
$id = $_GET["id"];

//open the database
//check to see if id in url matches id in database
$mangas = getMangas()["items"];

foreach ($mangas as $manga) {
    if ($id == $manga['id']) {
        deleteManga($manga);
        header('Location: ?page=home');
    } else {
        header('Location: ?page=home');
    }
}
