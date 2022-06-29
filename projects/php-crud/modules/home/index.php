<?php include('../php-crud/data/fighter-data.php') ?>

<h1 class='loud-voice'>Fighters</h1>

<ul class='fighters-list'>
    <?php foreach ($fighters as $fighter) { ?>
        <li class='fighter'>
            <a href="?page=detail&id=<?= $fighter['id'] ?>">
                <fighter-card>
                    <h2 class='<?= $fighter['name'] ?>'>
                        <?= ucfirst($fighter['name']) ?>
                    </h2>
                    <picture>
                        <img src="<?= $fighter['portrait'] ?>" alt="SFV: <?= ucfirst($fighter['name']) ?>">
                    </picture>
                </fighter-card>
            </a>
        </li>
    <?php } ?>
</ul>