<?php include('header.php') ?>
<?php require('resume-data.php') ?>

<?php
function filterArrayByType($array, $type)
{
	$filteredArray = [];
	foreach ($array as $item) {
		if ($item["type"] == $type) {
			array_push($filteredArray, $item);
		}
	}
	return $filteredArray;
}


function renderList($array, $type)
{
	$list = filterArrayByType($array, $type);
	foreach ($list as $item) {
		include('resume-card.php'); ?>
<?php }
} ?>


<main class="resume">
	<inner-column>
		<h2 class="attention-voice">Resume</h2>

		<span>Where I’ve been. Get to know a little more.</span>

		<article-grid>

			<h3 class="calm-voice">Education History</h3>
			<?php renderList($experiences, "education"); ?>

		</article-grid>

		<article-grid>

			<h3 class="calm-voice">Job History</h3>
			<?php renderList($experiences, "job"); ?>

		</article-grid>



	</inner-column>
</main>

</div>
</body>

</html>





<?php


// // renderList($experiences, "education");

// // renderList($experiences, "job");

// // renderList($experiences, "bonus");



// // print_r($jobs);


// // array filter takes a function as it's second argument
// $educations = array_filter($experiences, function ($experience) {
// 	return $experience["type"] == "job";
// });
// // this is how you'd write it with an "anonymous" function (no name)


// function ifType($experience)
// {
// 	return $experience["type"] == "job";
// }

// $filtered = array_filter($experiences, "ifType");





// print_r($jobs);

// print_r($educations);

?>