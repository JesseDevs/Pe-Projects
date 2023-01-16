<?php

// $fighters = json_decode(file_get_contents("data/originalFighters.json"), true);

function getFighters()
{
    $json = file_get_contents("data/fighter.json");
    $data = json_decode($json, true);
    return $data;
}


function getFighterById($id)
{

    foreach (getFighters() as $fighter) {
        if ($id == $fighter['id']) {
            return $fighter;
        }
    }
}

function initializeDatabase()
{
    if (!file_get_contents('data/fighter.json')) {
        $fighters = [];
        $json = json_encode($fighters);
        file_put_contents("data/fighter.json", $fighters);
    } else {
        return getFighters();
    }
}

function encodeFighters($data)
{
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("data/fighter.json", $json);
}

function addFighter($addition)
{
    //generate a unique id for each manga.
    $bytes = random_bytes(5);
    $id = bin2hex($bytes);

    //decode json, and store the associative array in a variable.
    $fighters = getFighters();

    //$manga contains an associative array with name and manga keys.
    //insert them inside of a unique id.
    $fighter['id'] = $id;

    array_push($fighters, $addition);
    encodeFighters($fighters);
    header('https://peprojects.dev/alpha-4/jesse/projects/fighters-crud/?page=list');
}

function deleteFighter($item)
{

    $fighters = getFighters();
    $filtered = [];
    //remove the $id from the array.
    foreach ($fighters as $fighter) {
        if ($fighter['id'] !== $item['id']) {
            array_push($filtered, $fighter);
        }
    }

    //turn the associative array back into json.
    encodeFighters($filtered);
    header('https://peprojects.dev/alpha-4/jesse/projects/fighters-crud/?page=list');
}


function editFighter($idToEdit, $editedFighter)
{
    //returns an associatve array of the json
    $fighters = getFighters();

    $filtered = [];

    //remove the $id from the array.
    foreach ($fighters as $fighter) {
        if ($fighter['id'] !== $idToEdit) {
            array_push($filtered, $fighter);
        }
    }

    array_push($filtered, $editedFighter);

    encodeFighters($filtered);
}
