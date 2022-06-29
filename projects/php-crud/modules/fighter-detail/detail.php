<?php include('../php-crud/data/fighter-data.php');

$chosenfighter = null;
$requested_id = null;

if (isset($_GET['id'])) {
    $requested_id = $_GET['id'];
}
// echo $requested_id; 
?>

<?php foreach ($fighters as $fighter) {
    if ($requested_id == $fighter['id']) {
        $chosenfighter = $fighter;
    }
}


?>

<?php if (isset($chosenfighter)) { ?>


    <fighter-card>
        <h2 class='<?= $chosenfighter['name'] ?>'>
            <?= ucfirst($chosenfighter['name']) ?>
        </h2>
        <picture>
            <img src="<?= $chosenfighter['portrait'] ?>" alt="SFV: Ryu">
        </picture>
    </fighter-card>

<?php } else { ?>

    <h1?> No Fighter found. </h1>

    <?php } ?>