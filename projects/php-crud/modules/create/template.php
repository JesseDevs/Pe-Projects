<section class='form'>
    <?php

    $add = isset($_POST['add']);

    if ($add) {
        echo "added";
    }
    ?>

    <h1 class="loud-voice">CREATE A FIGHTER</h1>

    <inner-column>

        <form method="POST">
            <field>
                <label>Name</label>
                <input type=" text" name='name' maxlength='15'>
            </field>
            <field>
                <label>Portrait</label>
                <input type="file" name="portrait" accept="image/*">
            </field>
            <field>
                <label>Alternate Costumes</label>
                <input type="file" name="costumes" accept="image/*" multiple>
            </field>
            <field>
                <label>Quote</label>
                <input type="text" name='quote' maxlength='40'>
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
                <input type="text" name='occupation' maxlength='15'>
            </field>

            <field>
                <label>Description</label>
                <textarea name='description'></textarea>
            </field>

            <field>
                <label>Special Move One</label>


                <label>Name Of The Move</label>
                <input type="text" name='specials-one' maxlength='15'>

                <label>Image Of The Move</label>
                <input type="file" name="specials-one" accept="image/*">
            </field>
            <field>
                <label>Special Move Two</label>


                <label>Name Of The Move</label>
                <input type="text" name='specials-two' maxlength='15'>

                <label>Image Of The Move</label>
                <input type="file" name="specials-two" accept="image/*">
            </field>
            <field>
                <label>Special Move Three</label>


                <label>Name Of The Move</label>
                <input type="text" name='specials-three' maxlength='15'>

                <label>Image Of The Move</label>
                <input type="file" name="specials-three" accept="image/*">
            </field>

            <button type="submit" name='add'>
                Create
            </button>
        </form>

    </inner-column>
</section>