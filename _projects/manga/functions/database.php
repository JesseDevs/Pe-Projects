<?php
//retrieve mangas from the json file
//getMangas()["stuff"] to access the items within the associative array

function getMangas()
{
    $json = file_get_contents("data/manga.json");
    $data = json_decode($json, true);
    return $data;
}

//if the database is empty, fill it with something.
function initializeDatabase()
{
    if (!file_get_contents('data/manga.json')) {
        $manga = [];
        $json = json_encode($manga);
        file_put_contents("data/manga.json", $json);
    } else {
        return getMangas()['mangas'];
    }
}

function encodeMangas($data)
{
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("data/manga.json", $json);
}

//add mangas to the json file
function addManga($manga)
{
    //generate a unique id for each manga.
    $bytes = random_bytes(5);
    $id = bin2hex($bytes);

    //decode json, and store the associative array in a variable.
    $mangas = getmangas();

    //$manga contains an associative array with name and manga keys.
    //insert them inside of a unique id.
    $manga['id'] = $id;

    array_push($mangas['mangas'], $manga);
    encodeMangas($mangas);
    header('https://peprojects.dev/alpha-4/jesse/projects/manga/?page=list');
}


function deleteManga($item)
{
    //get the associative array
    $mangas = getMangas()['mangas'];
    $filtered['mangas'] = [];
    //remove the $id from the array.
    foreach ($mangas as $manga) {
        if ($manga['id'] !== $item['id']) {
            array_push($filtered['mangas'], $manga);
        }
    }


    //turn the associative array back into json.
    encodeMangas($filtered);
    header('https://peprojects.dev/alpha-4/jesse/projects/manga/?page=list');
}


function editManga($idToEdit, $editedManga)
{
    //returns an associatve array of the json
    $mangas = getmangas()['mangas'];

    $filtered['mangas'] = [];

    //remove the $id from the array.
    foreach ($mangas as $manga) {
        if ($manga['id'] !== $idToEdit) {
            array_push($filtered['mangas'], $manga);
        }
    }

    array_push($filtered['mangas'], $editedManga);

    encodeMangas($filtered);
    header('https://peprojects.dev/alpha-4/jesse/projects/manga/?page=list');
}
