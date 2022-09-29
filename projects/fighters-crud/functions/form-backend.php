<?php

//bring in data
$json = file_get_contents("data/playstyle.json");
$playstyleData = json_decode($json, true);
$playstyle = $playstyleData["playstyle"];

$name = "";
$quote = "";
$job = "";
$style = "";
$description = '';


$nameError = false;
$quoteError = false;
$jobError = false;
$styleError = false;
$descriptionError = false;

$fileDestination = null;
$portrait = null;


if (isset($_POST["add"])) :

    //name
    if (isset($_POST["name"])) {
        $name = $_POST["name"];

        if (strlen($name) > 0) {
            $name = htmlspecialchars($_POST["name"]);
        } else {
            $nameError = "No name. No battle, bud.";
        }
    }

    //quote
    if (isset($_POST["quote"])) {
        $quote = $_POST['quote'];

        if (strlen($quote) > 0) {
            $quote = htmlspecialchars($_POST["quote"]);
        } else {
            $quoteError = "Needs a cool phrase to yell..";
        }
    }

    //style
    if (isset($_POST["style"])) {
        $style = $_POST['style'];

        if (strlen($style) > 0) {
            $style = htmlspecialchars($_POST["style"]);
        } else {
            $styleError = "You need a style to evolve beyond it.";
        }
    }

    //job
    if (isset($_POST["job"])) {
        $job = $_POST['job'];

        if (strlen($job) > 0) {
            $job = htmlspecialchars($_POST["job"]);
        } else {
            $jobError = "Fighting don't pay the bills..";
        }
    }

    //description
    if (isset($_POST["description"])) {
        $description = $_POST["description"];

        if (strlen($description) > 0) {
            $description = htmlspecialchars($_POST["description"]);
        } else {
            $descriptionError = "Needs an inspirational story..";
        }
    }

    if ($_FILES['portrait']['size'] > 0) {
        $portrait_filepath = "images/uploads/" . $_FILES['portrait']['name'];
        move_uploaded_file($_FILES['portrait']['tmp_name'], $portrait_filepath);
        $portrait = $portrait_filepath;
        $hasportrait = true;
    } else {
        $portraitError = "No image??";
    }

    if (!empty($name) && !empty($quote) && !empty($occupation) && !empty($playstyle) && !empty($description)) {
        $chapters = $_POST["chapters"];

        $newFighter = [
            'id' => rand(9, 1000),
            'name' => $name,
            'quote' => $quote,
            'occupation' => $job,
            'playstyle' => $style,
            'description' => $description,
            'portrait' => $portrait
        ];

        addFighter($newFighter);

        //redirect page to homepage to prevent resubmition.
        header('Location: ?page=list');
    }


endif;
