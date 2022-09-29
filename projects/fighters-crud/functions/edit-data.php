<?php

if (isset($_POST["edit"])) {

    if (isset($_POST["name"])) {
        $newName = htmlspecialchars(trim($_POST["name"]));
    }

    if (isset($_POST["quote"])) {
        $newQuote = htmlspecialchars(trim($_POST["quote"]));
    }

    if (isset($_POST["description"])) {
        $newDescription = htmlspecialchars(trim($_POST["description"]));
    }

    if (isset($_POST["job"])) {
        $newJob = htmlspecialchars(trim($_POST["job"]));
    }

    if (!empty($newName) && !empty($newQuote)) {
        $editedFighter = [

            "name" => $newTitle,
            "quote" => $newQuote,
            "description" => $newDescription,
            "occupation" => $newJob,
            "id" => $chosenFighter['id']
        ];
    }

    editManga($chosenFighter['id'], $editedFighter);
    header('Location: ?page=list');
}
