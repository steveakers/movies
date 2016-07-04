<?php
class movie {
	public $nResults  = "";
	public $sDirector = "";
	public $sTitle    = "";
	public $sThumb    = "";
	public $sCover    = "";
	public $sRelease  = "";
	public $sRuntime  = "";
	public $sGenre    = "";
	public $sRating   = "";
	public $sLongDesc = "";
	
	// function to construct the class
	public function __construct($json) {
	    include_once('../functions/formatting.php');
		
		$aMovies   = json_decode($json, true);

		$this->nResults  = $aMovies['resultCount'];
		$this->sDirector = $aMovies['results'][0]['artistName'];
		$this->sTitle    = $aMovies['results'][0]['trackName'];
		$this->sThumb    = str_replace("100x100", "200x200", $aMovies['results'][0]['artworkUrl100']);
		$this->sCover    = str_replace("100x100", "600x600", $aMovies['results'][0]['artworkUrl100']);
		$this->sRelease  = substr($aMovies['results'][0]['releaseDate'],0,10);
		$this->sRuntime  = fnFormatRuntime($aMovies['results'][0]['trackTimeMillis']);
		$this->sGenre    = $aMovies['results'][0]['primaryGenreName'];
		$this->sRating   = $aMovies['results'][0]['contentAdvisoryRating'];
		$this->sLongDesc = $aMovies['results'][0]['longDescription'];
    }
}
?>