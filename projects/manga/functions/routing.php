<?php

//check if "?page=" exists
if (isset($_GET["page"])) {
    //set $page to whatever is after ?page=
    $page = $_GET["page"];
} else {
    //default
    $page = "home";
}

function renderPage($page)
{
    include("templates/pages/$page.php");
}
