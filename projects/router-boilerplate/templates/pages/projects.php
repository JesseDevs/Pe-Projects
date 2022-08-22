<h1>Projects example</h1>

<ul>
    <?php foreach ($projectsData as $projects) { ?>
        <li>
            <a href="?page=project&id=<?= $project['id'] ?>">
                <?= $project['name']; ?>
            </a>
        </li>

    <?php } ?>

</ul>