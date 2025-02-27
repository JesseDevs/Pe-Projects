<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-do APP</title>
    <meta name='description' content="What's next? What to do.">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>
        <inner-column>
            <h1 class="roar-voice">Todo App</h1>
        </inner-column>

    </header>

    <main class="page-content ">
        <section>
            <inner-column>
                <form>
                    <field>
                        <label for="x">What is your next todo?</label>
                        <input id='x' type="text" autocomplete="off" required>
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