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

    <label class='chant-voice' for="form">Update Information?</label>

    <field>

        <input name="title" type="text" value="<?= $currentManga['title'] ?>">
    </field>

    <field>

        <input name="author" type="text" value="<?= $currentManga['author'] ?>">
    </field>

    <field>

        <input name="chapters" type="number" value="<?= $currentManga['chapters'] ?>">
    </field>

    <button name="edit" type="submit" class="button" role="button"><span class="text">Update</span></button>
</form>