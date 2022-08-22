<?php
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
?>

<?php include("templates/modules/form/template.php"); ?>