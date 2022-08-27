<form method="POST">

    <field>
        <input name="title" type="text" placeholder='Title' value="<?= $title ?>">
    </field>

    <field>

        <input name="author" type="text" placeholder='Author' value="<?= $author ?>">
    </field>

    <field>
        <input name="chapters" type="number" placeholder='Number of Chapters' value="<?= $chapters ?>">
    </field>

    <button name="submit" type="submit">add manga</button>
</form>