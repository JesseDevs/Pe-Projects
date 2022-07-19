<?php

function printQueryString()
{
    return $_SERVER['QUERY_STRING'];
}

function currentPage()
{
    if (isset($_GET["page"])) {
        return $_GET["page"];
    } else {
        return 'home';
    }
}

function getPageTemplate($name)
{
    $filePath = "pages/" . currentPage() . ".php";
    if (file_get_contents($filePath)) {
        include($filePath);
    } else {
        include('pages/404.php');
    }
}
