<?php

$page = 'template-one';
$pageData = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "template-one";
}
