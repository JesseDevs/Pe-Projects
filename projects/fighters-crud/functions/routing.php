<?php

$page = 'home';
$pageData = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}
