<?php

$page = 'home';
$pageData = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}


function getTemplate($page)
{
    if (isset($page)) {
        $template = 'templates/pages/' . $page . '/template.php';
    }
    include($template);
}


function activePage($name)
{
    if ($_GET["page"] == $name) {
        echo "active";
    }
}

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
