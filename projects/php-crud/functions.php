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
    $dataFile = 'data/data.json';

    //save new array ex. newFighter
    file_put_contents($dataFile, $jsonedData, FILE_APPEND | LOCK_EX);
}

function getDatabase()
{

    if (!file_get_contents("data/data.json")) {
        file_put_contents("data/data.json", '[]');
    }
    $json = file_get_contents("data/data.json");
    return json_decode($json, true);
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
