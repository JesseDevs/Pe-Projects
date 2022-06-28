<?php include('../php-crud/data/fighter-data.php'); ?>

<h1>hi</h1>

<?php
if (isset($_GET['fighter'])) {
    $fighter_id = $_GET['fighter'];
}

echo $fighter_id; ?>