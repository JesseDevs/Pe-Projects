<?php

$page = 'home';
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

if ($page == 'home') { // home page
    include('templates/pages/home.php');
}

if ($page == 'projects') { // list page
    include('templates/pages/projects.php');
}

if ($page == 'project') { //detail page
    include('templates/pages/project.php');
}

if ($page == 'home') {
    $json = file_get_contents('data/pages/home.json');
    $pageData = json_decode($json, true);
}

if ($page == 'projects') {
    $json = file_get_contents('data/projects.json');
    $projectsData = json_decode($json, true);
}

if ($page == 'project') {
    $json = file_get_contents('data/projects.json');
    $projectsData = json_decode($json, true);
    foreach ($projectsData as $project) {
        if ($project['id'] == $_GET['id']) {
            $projectData = $project;
        }
    }
}

function currentPage()
{
    if (isset($_GET["page"])) {
        return $_GET["page"];
    } else {
        return 'home';
    }
}

function pageData()
{
    $page = currentPage();
    $filePath = 'data/pages/' . $page . '.json';
    $json = file_get_contents($filePath);
    if (!$json) {
        $json = file_get_contents('data/pages/404.json');
    }
    $pageData = json_decode($json, true);
    return $pageData;
}

function renderPageTemplate()
{
    $filePath = "templates/pages/standard.php";
    $pageData = pageData();
    if (file_get_contents($filePath)) {
        include($filePath);
    } else {
        include('templates/pages/404.php');
    }
}
