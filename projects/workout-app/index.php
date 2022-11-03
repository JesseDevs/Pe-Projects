<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-do APP</title>
    <meta name='description' content="What's next? What to do.">
    <link rel="icon" href="data:;base64,iVBORwOKGO=" />

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include("templates/partials/header/template.php") ?>
    <main class="page-content ">
        <section>
            <inner-column>
                <form>
                    <field>
                        <label for="x">What is your next todo?</label>
                        <input id='x' type="text" autocomplete="off" required>

                        <div class="select-container">
                            <select name="workoutType" id="workoutType">
                                <option value="" disabled>-- Workout Type --</option>
                                <option value="chest">Chest</option>
                                <option value="back">Back</option>
                                <option value="legs">Legs</option>
                                <option value="shoulders">Shoulders</option>
                                <option value="cardio">Cardio</option>
                            </select>
                        </div>

                    </field>

                    <button type="submit">Add</button>
                </form>

                <output>

                </output>

            </inner-column>
        </section>
        <!-- <div class="trash">

            <button id="trashcan" data-action="trash">Trash</button>

        </div> -->
    </main>

    <script src="script.js" type='module'></script>
</body>

</html>