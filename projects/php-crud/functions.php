<?php

// show errors
function showErrors()
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

// to print array information for the user
function format($variable)
{
    echo "<pre>";
    echo "<code>";
    echo print_r($variable);
    echo "</code>";
    echo "</pre>";
}

// Get Page information and direct user accordingly.
function getTemplate($page)
{
    if (isset($page)) {
        $template = 'modules/' . $page . '/template.php';
    }
    include($template);
}


// Based on the page, return "active" class and use that to make changes to page based on the page being selected.
function activePage($name)
{
    if ($_GET["page"] == $name) {
        echo "active";
    }
}

//  search if clicked playstyle matches that of fighter and thus alter the page with a class as "selected"

// This function reads when the user clicks on playstyle tab
function activeFighters($name)
{
    $playstyle = null;

    if (isset($_GET['playstyle'])) {
        $playstyle = $_GET['playstyle'];
    }
    if ($playstyle == $name) {
        echo "filter";
    }
}


// Gets JSON fighter data and returns it as a php data file
function getFighters()
{
    return json_decode(file_get_contents("data/fighter.json"), true);
}

// this function takes the selection and compares it to fighters data
function isSelected($chosenStyle, $fighterStyle)
{
    if ($chosenStyle) {
        if ($chosenStyle == $fighterStyle) {
            return "selected";
        }
    } else {
        return "selected";
    }
}

function has($array, $item)
{
    if (isset($array[$item])) {
        return true;
    }

    return false;
}

function getFighterById($id)
{

    foreach (getFighters() as $fighter) {
        if ($id == $fighter['id']) {
            return $fighter;
        }
    }
}

function displayEnemies($chosen)
{
    foreach (getFighters() as $fighter) {
        foreach ($chosen['enemy'] as $enemy) {
            if ($enemy == $fighter['id']) {
                displayEnemy($fighter);
            }
        }
    }
}

function displayFriends($chosen)
{
    foreach (getFighters() as $fighter) {
        foreach ($chosen['ally'] as $friend) {
            if ($friend == $fighter['id']) {
                displayFriend($fighter);
            }
        }
    }
}

function displayEnemy($enemy)
{ ?>
    <a href="?page=detail&id=<?= $enemy['id'] ?>">
        <article class="enemy relation">
            <div class="container">
                <h3 class="strict-voice">Arch-nemesis</h3>
                <p> <?= $enemy['name'] ?> </p>
            </div>

            <picture>
                <img src="<?= $enemy['portrait'] ?>" alt="enemy">
            </picture>
        </article>
    </a>
<?php } ?>

<?php

function displayFriend($friend)
{ ?>
    <a href="?page=detail&id=<?= $friend['id'] ?>">
        <article class="friend relation">
            <div class="container">
                <h3 class="strict-voice">Ally In Battle</h3>
                <p> <?= $friend['name'] ?> </p>
            </div>

            <picture>
                <img src="<?= $friend['portrait'] ?>" alt="friend">
            </picture>
        </article>
    </a>
<?php } ?>

<?php

function writeData($array)
{
    //pull up json file
    $jsonedData = json_encode($array);
    $dataFile = 'data/fighter.json';

    //save new array ex. newFighter
    file_put_contents($dataFile, $jsonedData);
}

function isLoggedIn($password)
{
    $secretKey = 'StreetFighter';

    if ($password == $secretKey) {
        return true;
    } else {
        return false;
    }
}


// SOLUTION:

function initializeDatabase()
{
    // create a data structure you want to use as your base
    $input = [];
    // encode that to json
    $json = json_encode($input);
    // save it to the file
    file_put_contents("data/fighter.json", $json);
    // return the default datastructure
    return $input;
}

function getDatabase()
{
    // check if database file exists and has content
    // if it does
    if (file_get_contents("data/fighter.json")) {
        // get the content
        $file = file_get_contents("data/fighter.json");
        // decode it
        $data = json_decode($file, true);
        // return the database
        return $data;
    } else {
        // if it doesn't 
        // initialize the database
        // and return it's data (PHP-style)
        return initializeDatabase();
    }
}

function createRecord($input)
{
    // create a unique id
    // get the data so you can add to it
    $fighters = getDatabase();
    // put the input into the database
    $newFighters = array_push($fighters, $input);
    // save the updated database
    return $newFighters;
}

function saveDatabase($data)
{
    // convert it to json
    $json = json_encode($data);
    // save it
    file_put_contents("data/fighter.json", $json);
}

function deleteItemById($items, $idToDelete)
{
    $filtered = [];
    foreach ($items as $currentItem) {
        if ($currentItem['id'] !== $idToDelete) {
            array_push($filtered, $currentItem);
        }
    }
    saveDatabase($filtered);
}



// you should need a form to see if your functions are working
// keep it simple
// createRecord("Ivy");
// createRecord("Derek");



// RENDER THINGS

function renderRecord($id, $name)
{
    echo "
        <li>
            <h2>$name</h2>

            <a href='?delete=$id'>delete</a>
        </li>
    ";
}

function renderRecords($records)
{
    // render the records
    $names = array_reverse($records["items"]);
    foreach ($names as $id => $name) {
        renderRecord($id, $name);
    }
}

function showError($error)
{
    $message = "Please add a name.";
    if ($error) {
        return $message;
    }
}
$missingText = null;



// HANDLE INPUT

// if the user added a name
if (isset($_POST["submitted"])) {
    // if they added text
    if ($_POST["name"] && strlen($_POST["name"]) > 0) {
        // create the record
        createRecord($_POST["name"]);
        header('LOCATION: create.php');
    } else {
        // if not, signify there's an error
        $missingText = true;
    }
}

if (isset($_GET["clearDatabase"])) {
    initializeDatabase();
    header('LOCATION: single-file.php');
}
