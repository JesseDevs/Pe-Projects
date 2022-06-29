<section class='form'>
    <?php
    if (isset($_POST['add'])) {
        echo "added";
    }
    ?>
    <inner-column>
        <h1 class="loud-voice">CREATE A FIGHTER</h1>

        <form method="POST">
            <field>
                <label>Name</label>
                <input type="text" maxlength='15'>
            </field>
            <field>
                <label>Portrait</label>
                <input type="file" name="image" accept="image/*">
            </field>
            <field>
                <label>Quote</label>
                <input type="text" maxlength='40'>
            </field>

            <button type="submit" name='add'>
                Create
            </button>
        </form>

    </inner-column>
</section>