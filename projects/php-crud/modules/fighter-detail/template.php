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


    <fighter-card class='detail'>
        <h2 class=' attention-voice <?= lcfirst($chosenfighter['name']) ?>'>
            <?= $chosenfighter['name'] ?>
        </h2>
        <picture>
            <img src="<?= $chosenfighter['portrait'] ?>" alt="SFV:<?= $chosenfighter['name'] ?> ">
        </picture>

        <text-content>
            <em><?= $chosenfighter['quote'] ?></em>
            <?php
            if (isset($chosenfighter['audio'])) { ?> <audio controls src="<?= $chosenfighter['audio'] ?>"></audio><?php } ?>

        </text-content>
    </fighter-card>

<?php } else { ?>

    <h1?> No Fighter found. </h1>


    <?php } ?>