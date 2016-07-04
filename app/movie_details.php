<?php
include_once('../functions/functions.php');
include_once('../classes/movie.php');

foreach($_REQUEST as $key=>$value) {
	if(!is_array($value) && $key == "title") {
		$sTitle = str_replace(" ", "+", $value);
	}
}

$movie = fnGetMovie($sTitle);
?>

<div style="width:100%">
	<div style="position:relative;float:left;width:400px;padding-right:50px;">
		<img src="<?php echo($movie->sCover); ?>" />
	</div>
	<div style="position:relative;float:left;width:50%;">
		<p>Title: <?php echo($movie->sTitle); ?></p>
		<p>Director: <?php echo($movie->sDirector); ?></p>
		<p>Released: <?php echo($movie->sRelease); ?></p>
		<p>Runtime: <?php echo($movie->sRuntime); ?></p>
		<p>Genre: <?php echo($movie->sGenre); ?></p>
		<p>Rating: <?php echo($movie->sRating); ?></p>
		<p>Description: <?php echo($movie->sLongDesc); ?></p>
	</div>
</div>