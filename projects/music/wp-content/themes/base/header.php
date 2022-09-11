<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo wp_get_document_title(); ?></title>
    <meta name='description' content="- - -">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/manga/images/reeds.jpg">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class='site-header'>
        <inner-column>
            <?php include('templates/modules/site-menu/template.php') ?>
        </inner-column>
    </header>