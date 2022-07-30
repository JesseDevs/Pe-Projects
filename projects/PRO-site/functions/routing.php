<?php

$pageId = 'home';
if (isset($_GET["page"])) {
    $pageId = $_GET["page"];
}

if ($pageId == 'home') {
    $json = file_get_contents('data/pages/home.json');
    $pageData = json_decode($json, true);
}

if ($pageId == 'projects') {
    $jsonPage = file_get_contents('data/pages/projects.json');
    $pageData = json_decode($jsonPage, true);
    $json = file_get_contents('data/projects.json');
    $projectsData = json_decode($json, true);
}

if ($pageId == 'project') {
    $json = file_get_contents('data/projects.json');
    $projectsData = json_decode($json, true);
    foreach ($projectsData as $project) {
        if ($project['id'] == $_GET['id']) {
            $projectData = $project;
        }
    }
}
