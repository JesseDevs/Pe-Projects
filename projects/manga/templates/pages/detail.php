<?php

$currentManga = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $currentManga = getMangaById($id);
}


?>

<h1 class="roar-voice"> <?= $currentManga['title'] ?></h1>

<h2>This is a detail page/ section</h2>

<span class="delete"><a href="?page=delete&id=<?= $currentManga['id'] ?>">Delete</a></span>
<span class="edit"><a href="?page=edit&id=<?= $currentManga['id'] ?>">Edit</a></span>