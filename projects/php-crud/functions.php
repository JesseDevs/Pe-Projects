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

// Function to work through form reuqires data for the errors to that I can loop through them. Until then it won't work, I belive.

// function formPost($name)
// {
//     if (isset($_POST["name"])) {
//         $name = $_POST["name"];

//         if (strlen($name) > 0) {
//             $check = true;
//         } else {
//             $error = "No name. No battle, bud.";
//         }
//     }
// }

// gets json data from data folder and gets is ready to be add to a php variable
// next step would be <?php $data = getdatabase(datafile.json)


function writeData($array)
{
    $jsonedData = json_encode($array);
    $dataFile = 'data/data.json';

    file_put_contents($dataFile, $jsonedData);
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
