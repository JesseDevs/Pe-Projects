<?php

$page = "home";
if (isset($_GET["page"])) {

    $page = $_GET["page"];

}

function renderPage($page){
    
    include("templates/pages/$page.php");

}

