<?php include('../php-crud/data/fighter-data.php') ?>

<section class="street-fighter list-grid">
    <inner-column class='tight'>


        <h1 class='loud-voice'>CHOOSE YOUR FIGHTER</h1>

        <ul class='fighters-list'>
            <?php foreach ($fighters as $fighter) { ?>
                <li class='fighter <?= lcfirst($fighter['name']) ?>'>
                    <a href="?page=detail&id=<?= $fighter['id'] ?>">
                        <fighter-card>
                            <h2>
                                <?= $fighter['name'] ?>
                            </h2>
                            <picture>
                                <img src="<?= $fighter['portrait'] ?>" alt="SFV: <?= ($fighter['name']) ?>">
                            </picture>
                        </fighter-card>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </inner-column>
</section>