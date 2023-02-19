<?php include('router/functions.php');

$description = null;
$metaImage = null;

$metaImage = $pageData['metaImage'] ?? 'images/details/computer.jpg';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jesse Felix Personal Site: <?= ucfirst($page); ?> Page</title>
	<meta name='description' content="<?= $pageData['intro'] ?>">
	<meta property="og:image" content="<?= $metaImage ?>">

	<link rel="icon" type="image/png" sizes="32x32" href="./images/wolf.png" />

	<link rel="stylesheet" href="css/style.css">

</head>

<body class='<?= $page ?>'>

	<?php
	include('templates/components/site-header.php');

	renderPage();

	// include('templates/components/site-footer.php');
	// 
	?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
	<script src="scripts/file.js"></script>

</body>

</html>