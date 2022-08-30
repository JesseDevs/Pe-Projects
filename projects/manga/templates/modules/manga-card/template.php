<manga-card>



    <h4 class='strict-voice'><?= ucwords($manga['title']) ?></h4>
    <p>
        <strong>Author: </strong>
        <?= ucwords($manga['author']) ?>
    </p>
    <p>
        <strong>Chapters: </strong><?= $manga['chapters'] ?>
    </p>
    <a href="?page=detail&id=<?= $manga['id'] ?>">
    </a>

</manga-card>