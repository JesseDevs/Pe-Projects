<form class='main-form'>
    <field>
        <label for="x" class='loud-voice'>Add next workout!</label>
        <input id='x' type="text" autocomplete="off" placeholder="ex. Barebell Bench Press" required>

        <div class="select-container">
            <select name="workoutType" id="workoutType" class='another-voice'>
                <option value="" disabled>-- Workout Type --</option>
                <option value="chest">Chest</option>
                <option value="back">Back</option>
                <option value="legs">Legs</option>
                <option value="shoulders">Shoulders</option>
                <option value="cardio">Cardio</option>
            </select>
        </div>

    </field>

    <button type="submit" class='big-button'>Add</button>
</form>