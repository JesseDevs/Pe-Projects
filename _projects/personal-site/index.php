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
	<meta http-equiv="Cache-Control" content="max-age=200" />

	<link rel="icon" type="image/png" sizes="32x32" href="./images/wolf.png" />

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


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
	</script>
	<script src="scripts/file.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,
			spaceBetween: 30,
			loop: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>



</body>

</html>