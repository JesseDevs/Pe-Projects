<?php
// Router
$page = null;
$get = isset($_GET["page"]);

if ($get) {
    $page = htmlspecialchars_decode($_GET["page"]); // url?page = string
} else {
    $page = "home"; // default
}

// For future reference would be nice to make a header for each page element to give it nice styling outside of the inner-column

// Check if page exist and then directs the file path based on the page

//FUNCTIONS

function getTemplate($page)
{
    if (isset($page)) {
        $template = 'modules/' . $page . '/template.php';
    }
    include($template);
}


function activePage($name)
{
    $page = null;
    $get = isset($_GET["page"]);

    if ($get) {
        $page = htmlspecialchars_decode($_GET["page"]); // url?page = string
    } else {
        $page = "home"; // default
    }
    if ($page == $name) {
        echo "active";
    }
}

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

function activeFighters($name)
{
    $playstyle = null;
    $filter = [];
    $results = [];

    if (isset($_GET['playstyle'])) {
        $playstyle = $_GET['playstyle'];
    }
    if ($playstyle == $name) {
        echo "filter";
    }
}
