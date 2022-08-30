<detail-card>
    <text-content>

        <h2 class="roar-voice"> <?= $currentManga['title'] ?></h2>
        <p>The author of this book / manga is <strong><?= ucwords($currentManga['author']) ?></strong></p>
        <p>This book / manga has <strong><?= $currentManga['chapters'] ?>!</strong></p>
    </text-content>

    <div class="detail-actions">
        <a class=" button delete" href="?page=delete&id=<?= $currentManga['id'] ?>"><span>Delete</span></a>
        <?php if ($page !== 'edit') { ?>
            <a class=" button edit" href="?page=edit&id=<?= $currentManga['id'] ?>"><span>Edit</span></a>

        <?php  }  ?>
    </div>
</detail-card>