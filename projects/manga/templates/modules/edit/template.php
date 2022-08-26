<?php

if (isset($_POST["edit"])) {

    if (isset($_POST["title"])) {
        $newTitle = htmlspecialchars(trim($_POST["title"]));
    }

    if (isset($_POST["author"])) {
        $newAuthor = htmlspecialchars(trim($_POST["author"]));
    }

    if (isset($_POST["chapters"])) {
        $newChapters = htmlspecialchars(trim($_POST["chapters"]));
    }

    if (!empty($newTitle) && !empty($newAuthor)) {
        $editedManga = [

            "title" => $newTitle,
            "author" => $newAuthor,
            "chapters" => $newChapters,
            "id" => $currentManga['id']
        ];
    }

    editManga($currentManga['id'], $editedManga);
}

?>

<form method="POST">

    <field>
        <label for="title">Title</label>
        <input name="title" type="text" value="<?= $currentManga['title'] ?>">
    </field>

    <field>
        <label for="author">Author</label>
        <input name="author" type="text" value="<?= $currentManga['author'] ?>">
    </field>

    <field>
        <label for="chapters">Chapters</label>
        <input name="chapters" type="number" value="<?= $currentManga['chapters'] ?>">
    </field>

    <button name="edit" type="submit">update</button>
</form>