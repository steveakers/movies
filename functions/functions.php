<?php
function fnGetMovie($sTerm) {
	$uri  = "https://itunes.apple.com/search?term=" . $sTerm . "&country=US&media=movie";
	$json = file_get_contents($uri, true);
	return new movie($json);
}
?>