<?php

$page = null;
$pageData = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";

}


if ($page == 'home') {
    $json = file_get_contents('data/pages/home.json');
    $pageData = json_decode($json, true);
}

if ($page == 'projects') {
    $jsonPage = file_get_contents('data/pages/projects.json');
    $pageData = json_decode($jsonPage, true);
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

function currentPage(){
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "home";

    }

}
