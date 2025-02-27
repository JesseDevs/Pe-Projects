<?php include('router/functions.php');

$metaImage = $pageData['metaImage'];
$desc = $pageData['intro'];

if ($page == 'project') {
	$metaImage = $project['thumbnail'];
	$desc = $project['detail'];
}

if (isset($_COOKIE['scrollPosition'])) {
	$cookie = $_COOKIE['scrollPosition'];
} else {
	$cookie = 0;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jesse Felix Personal Site: <?= ucfirst($page); ?> Page</title>
	<meta name='description' content="<?= $desc ?>">
	<meta property="og:image" content="<?= $metaImage ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="./images/wolf.png" />

	<link rel="stylesheet" href="css/style.css">
	<script src="https://file.myfontastic.com/Gk9diYaWZqybG4GjyZVqR6/icons.js"></script>
</head>

<body class='<?= $page ?>'>


	<!--
	This personal site is brought to you by Jesse Felix. If you catch any mistakes or ways to improve  my site, there is a contact form at the bottom.
	
	https://github.com/JesseDevs
	
	Check my github and leave a remark there if you'd prefer. 😉
	-->

	<?php
	include('templates/components/site-header.php');


	renderPage();


	include('templates/components/site-footer.php');

	?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
	<script src="scripts/file.js"></script>

	<script>
		var positionAt = <?= $cookie ?>;

		window.addEventListener('DOMContentLoaded', function() {
			window.scrollTo({
				top: positionAt,
				behavior: 'instant',
			});
			document.cookie = `scrollPosition=0`;
		});
	</script>

	<?php if ($page !== 'home') { ?>
		<style>
			main .has-a-module:nth-of-type(2) inner-column>* {
				padding-top: 0px;
			}
		</style>
	<?php } ?>
</body>

</html>