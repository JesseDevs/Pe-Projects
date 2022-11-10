<?php

function renderPage()
{
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "home";
    }

    if (file_exists("data/pages/" . $page . ".json")) {
        // Great!
    } else {
        $page = '404';
    }

    $json = file_get_contents("data/pages/" . $page . ".json");
    $pageData = json_decode($json, true);

    include('templates/pages/standard.php');
}

function currentPage()
{
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "home";
    }
}

function activePage($name)
{
    if (isset($_GET['page'])) {
        if ($_GET['page'] == $name) {
            echo "active";
        }
    }
}

function filterArrayByType($array, $type)
{
    $filteredArray = [];
    foreach ($array as $item) {
        if ($item["type"] == $type) {
            array_push($filteredArray, $item);
        }
    }
    return $filteredArray;
}


function renderList($array, $type)
{
    $list = filterArrayByType($array, $type);
    foreach ($list as $item) {
        include("templates/modules/resume-card/template.php");
    }
}
