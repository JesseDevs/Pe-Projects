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
                <label>Alternate Costumes</label>
                <input type="file" name="costumes" accept="image/*" multiple>
            </field>
            <field>
                <label>Quote</label>
                <input type="text" maxlength='40'>
            </field>
            <field>
                <label>Audio</label>
                <input type="file" name="audio" accept="audio/*">
            </field>
            <field>
                <label>Playstyle</label>
                <select name="playstyle">
                    <option value="Shoto">Shoto</option>
                    <option value="Charge">Charge</option>
                    <option value="Grappler">Grappler</option>
                    <option value="Zoner">Zoner</option>

                </select>
            </field>

            <field>
                <label>Occupation</label>
                <input type="text" maxlength='15'>
            </field>

            <field>
                <label>Description</label>
                <textarea></textarea>
            </field>

            <field>
                <label>Special Moves</label>


                <label>Name Of The Move</label>
                <input type="text" maxlength='15'>

                <label>Image Of The Move</label>
                <input type="file" name="image" accept="image/*">
            </field>

            <button type="submit" name='add'>
                Create
            </button>
        </form>

    </inner-column>
</section>