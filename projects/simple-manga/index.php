<?php require("functions.php") ?>
<?php $mangas = initializeDatabase();

$mangas = getMangas()['mangas'];

//after form is submitted make the variables empty.
$title = "";
$author = "";
$chapters = null;

//checks if the form is submitted.
if (isset($_POST["submit"])) {
    if (isset($_POST["title"])) {
        $title = htmlspecialchars(trim($_POST["title"]));
    }
    if (isset($_POST["author"])) {
        $author = htmlspecialchars(trim($_POST["author"]));
    }

    //Check if the title and author fields are filled in.
    if (!empty($title) && !empty($author)) {
        $chapters = $_POST["chapters"];

        $newManga = [
            "title" => $title,
            "author" => $author,
            "chapters" => $chapters
        ];

        //$title and $author have values, so add them to the json.
        addManga($newManga);

        //redirect page to homepage to prevent resubmition.
        header('Location: ?page=home');
    } elseif (empty($title)) {
        echo "enter title";
    } elseif (empty($author)) {
        echo "enter author";
    }
}

$currentManga = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $currentManga = getMangaById($id);
}

if (isset($_POST["edit"])) {

    if (isset($_POST["title"])) {
        $newTitle = htmlspecialchars(trim($_POST["title"]));
    }
    if (isset($_POST["author"])) {
        $newAuthor = htmlspecialchars(trim($_POST["author"]));
    }

    if (!empty($newTitle) && !empty($newAuthor)) {
        $editedManga = [
            "title" => $newTitle,
            "author" => $newAuthor,
            "chapters" => $chapters
        ];
    }

    editManga($id, $editedManga);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>[[insert Title]]</title>
    <meta name='description' content="[[Insert description]]">
    <meta property="og:image" content="images/default-meta.png">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class='site-header'>
        <inner-column>

            <nav>
                <ul>
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=list">List</a></li>
                    <li>
                        <p>?<?= printQueryString(); ?></p>
                    </li>
                </ul>

            </nav>

        </inner-column>
    </header>

    <main class="page-content">
        <section class="form">
            <inner-column>
                <form method="POST">

                    <field>
                        <label for="title">Title</label>
                        <input name="title" type="text" value="<?= $title; ?>">
                    </field>

                    <field>
                        <label for="author">Author</label>
                        <input name="author" type="text" value="<?= $author; ?>">
                    </field>

                    <field>
                        <label for="chapters">Chapters</label>
                        <input name="chapters" type="number" value="<?= $chapters; ?>">
                    </field>

                    <button name="submit" type="submit">add manga</button>
                </form>
            </inner-column>
        </section>

        <section class="manga-list">
            <inner-column>
                <manga-list>
                    <ul>
                        <?php foreach ($mangas as $manga) { ?>

                            <a href="?page=detail&id=<?= $manga['id'] ?>">LINK ME</a>
                            <li><?= ucwords($manga['title']) ?></li>
                            <li><?= ucwords($manga['author']) ?></li>
                            <li><?= $manga['chapters'] ?></li>
                            <li><?= $manga['id'] ?></li>

                        <?php } ?>
                    </ul>
                </manga-list>

            </inner-column>
        </section>

        <?php
        if (isset($_GET['page']) && $page = 'detail') { ?>


            <h1 class="roar-voice"> <?= $currentManga['title'] ?></h1>

            <span class="delete"><a href="?page=delete&id=<?= $currentManga['id'] ?>">Delete</a></span>
            <span class="edit"><a href="?page=edit&id=<?= $currentManga['id'] ?>">Edit</a></span>

        <?php } ?>


        <?php
        if (isset($_GET['page']) && $page = 'edit') { ?>

            <section class="form">
                <inner-column>
                    <?php
                    //check if the id in the url matches the id in the json
                    foreach ($mangas as $manga) {
                        if ($id == $manga['id']) { ?>

                            <form method="POST">

                                <field>
                                    <label for="title">Title</label>
                                    <input name="title" type="text" value="<?= $title; ?>">
                                </field>

                                <field>
                                    <label for="author">Author</label>
                                    <input name="author" type="text" value="<?= $author; ?>">
                                </field>

                                <field>
                                    <label for="chapters">Chapters</label>
                                    <input name="chapters" type="number" value="<?= $chapters; ?>">
                                </field>

                                <button name="edit" type="submit">update</button>
                            </form>
                    <?php }
                    }
                    ?>
                </inner-column>
            </section>

            <section class="display-manga">
                <inner-column>
                    <?php
                    foreach ($mangas as $manga) {
                        if ($id == $manga['id']) { ?>
                            <h1 class="roar-voice"> <?= $currentManga['title'] ?></h1>

                            <span class="delete"><a href="?page=delete&id=<?= $currentManga['id'] ?>">Delete</a></span>
                            <span class="edit"><a href="?page=edit&id=<?= $currentManga['id'] ?>">Edit</a></span>

                        <?php  }
                        ?>
                </inner-column>
            </section>

    <?php
                    }
                } ?>

    <?php
    if (isset($_GET['page']) && $page = 'delete') {

        foreach ($mangas as $manga) {
            if ($id == $manga['id']) {
                deleteManga($id);
            }
        }
    }
    ?>
    </main>

</body>

</html>