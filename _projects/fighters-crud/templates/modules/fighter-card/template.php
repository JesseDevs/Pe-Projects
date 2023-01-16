<a href="?page=detail&id=<?= $fighter['id'] ?>">
    <fighter-card>
        <h2>
            <?= $fighter['name'] ?>
        </h2>
        <?php if (isset($fighter['portrait'])) { ?>
            <picture style="background-image:url(<?= $fighter['portrait'] ?>)">
            </picture>
        <?php } ?>
    </fighter-card>
</a>