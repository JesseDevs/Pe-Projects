<?php

function currentPage()
{
    if (isset($_GET["page"])) {
        return $_GET["page"];
    } else {
        '';
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

function getData()
{
    $data = currentPage();
    print_r($data);
    $filePath = 'data/' . $data . '.json';
    $json = file_get_contents($filePath);
    if (!$json) {
        $json = file_get_contents('data/pages/404.json');
    }
    $data = json_decode($json, true);
    return $data;
}

function renderPage()
{
    $page = currentPage();
    $filePath = "templates/pages/" . $page . ".php";
    $pageData = pageData();
    if (file_get_contents($filePath)) {
        include($filePath);
    } else {
        include('templates/pages/404.php');
    }
}

if (currentPage() == 'project') {
    $json = file_get_contents('data/projects.json');
    $projectsData = json_decode($json, true);
    foreach ($projectsData as $project) {
        if ($project['id'] == $_GET['id']) {
            $projectData = $project;
        }
    }
}
