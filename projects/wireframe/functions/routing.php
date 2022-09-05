<?php

$page = 'template-one';
$pageData = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "template-one";
}

if ($page == 'template-one') {
    $json = file_get_contents('data/pages/template-one.json');
    $pageData = json_decode($json, true);
}


if ($page == 'template-two') {
    $json = file_get_contents('data/pages/template-two.json');
    $pageData = json_decode($json, true);
}


if ($page == 'template-three') {
    $json = file_get_contents('data/pages/template-three.json');
    $pageData = json_decode($json, true);
}

// if ($page == 'projects') {
//     $jsonPage = file_get_contents('data/pages/projects.json');
//     $pageData = json_decode($jsonPage, true);
//     $json = file_get_contents('data/projects.json');
//     $projectsData = json_decode($json, true);
// }

// if ($page == 'project') {
//     $json = file_get_contents('data/projects.json');
//     $projectsData = json_decode($json, true);
//     foreach ($projectsData as $project) {
//         if ($project['id'] == $_GET['id']) {
//             $projectData = $project;
//         }
//     }

//     $jsonPage = file_get_contents('data/pages/project.json');
//     $pageData = json_decode($jsonPage, true);
// }



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
