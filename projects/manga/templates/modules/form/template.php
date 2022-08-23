<form method="POST">

    <field>
        <label for="title">Title</label>
        <input name="title" type="text" value="<?= $title ?>">
    </field>

    <field>
        <label for="author">Author</label>
        <input name="author" type="text" value="<?= $author ?>">
    </field>

    <field>
        <label for="chapters">Chapters</label>
        <input name="chapters" type="number" value="<?= $chapters ?>">
    </field>

    <button name="submit" type="submit">add manga</button>
</form>