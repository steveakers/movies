<?php
function fnFormatRuntime($milliseconds) {
	$seconds = floor($milliseconds / 1000);
	$minutes = floor($seconds / 60);
	$hours   = floor($minutes / 60);
	$remain  = $minutes - ($hours * 60);
	return($hours . " hr " . $remain . " min");
}
?>