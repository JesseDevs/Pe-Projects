<?php

$chosenFighter = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $chosenFighter = getFighterById($id);
}
$fighters = getFighters();


if (isset($_GET['id'])) {
    deleteFighter($chosenFighter);
    header('Location: ?page=list');
} else {
    header('Location: ?page=list');
}
