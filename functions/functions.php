<?php

function fnFormatRuntime($milliseconds) {
	$seconds = floor($milliseconds / 1000);
	$minutes = floor($seconds / 60);
	$hours   = floor($minutes / 60);
	$remain  = $minutes - ($hours * 60);
	return($hours . " hr " . $remain . " min");
}

function fnGetMovie($sTerm) {
	$uri  = "https://itunes.apple.com/search?term=" . $sTerm . "&country=US&media=movie";
	$json = file_get_contents($uri, true);
	return new movie($json);
}

?>