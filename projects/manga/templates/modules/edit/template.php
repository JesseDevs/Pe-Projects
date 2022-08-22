<?php

if (isset($_POST["edit"])) {

    if (isset($_POST["title"])) {
        $newTitle = htmlspecialchars(trim($_POST["title"]));
    }
    if (isset($_POST["author"])) {
        $newAuthor = htmlspecialchars(trim($_POST["author"]));
    }

    if (!empty($newTitle) && !empty($newAuthor)) {
        $editedManga = [
            "title" => $newTitle,
            "author" => $newauthor,
            "chapters" => $chapters
        ];
    }

    editManga($id, $editedauthor);
}
?>

<form method="POST">

    <field>
        <label for="title">Title</label>
        <input name="title" type="text" value="<?= $title; ?>">
    </field>

    <field>
        <label for="author">Author</label>
        <input name="author" type="text" value="<?= $author; ?>">
    </field>

    <field>
        <label for="chapters">Chapters</label>
        <input name="chapters" type="number" value="<?= $chapters; ?>">
    </field>

    <button name="edit" type="submit">update</button>
</form>