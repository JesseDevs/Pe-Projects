<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $chosenFighter = getFighterById($id);
}

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

    if ($newName && $newQuote) {
        $editedFighter = [

            "name" => $newName,
            "quote" => $newQuote,
            "description" => $newDescription,
            "occupation" => $newJob,
            "playstyle" => $chosenFighter['playstyle'],
            "id" => $chosenFighter['id'],
            "portrait" => $chosenFighter['portrait'],
        ];
    }

    editFighter($chosenFighter['id'], $editedFighter);
    header('Location: ?page=list');
}
