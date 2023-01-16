<manga-card>



    <h4 class='strict-voice'><?= ucwords($manga['title']) ?></h4>
    <p>
        <?= $manga['chapters'] ?> Chapters
    </p>
    <p>
        <?= ucwords($manga['author']) ?>
    </p>

    <a href="?page=detail&id=<?= $manga['id'] ?>">
    </a>

</manga-card>