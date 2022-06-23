<!doctype html>

<html lang='en' class='special-magic no-js'>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>Sports website theme</title>
	<meta name='description' content='Matching themes presented by various sports website to achieve a similar feel.'>
	<meta property='og:image' content=''>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


	<link rel='stylesheet' href='styles/site.css'>
</head>


<body>
	<header>
		<inner-column>

			<?php include('modules/mast-head/template.php'); ?>

		</inner-column>
	</header>

	<main>

		<section class='welcome' id='welcome'>
			<inner-column class="wide">

				<?php include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
		</section>

		<section class="quick-links">

			<inner-column>
				<text-content>
					<label for="">Top News</label>
					<a href="#">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					</a>

					<a href="#">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					</a>
					<a href="#">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					</a>
				</text-content>

			</inner-column>
		</section>


		<section class='sign-up' id='sign-up'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
		</section>


		<section class='latest' id='latest'>
			<inner-column>

				<?php include('modules/articles-intro/template.php'); ?>

			</inner-column>
		</section>


		<section class='get-involved' id='get-involved'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
		</section>

	</main>

	<footer>
		<inner-column>

			<?php include('modules/site-map/template.php'); ?>

		</inner-column>
	</footer>
</body>

</html>