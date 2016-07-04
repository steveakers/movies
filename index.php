<?php include_once('includes/header.php'); ?>

<p>
	Title: 
	<input id="title" type="text" name="title" onkeypress="if(event.keyCode == 13){fnShowMovie($('#title').val())}" autofocus> 
	<button onclick="fnShowMovie($('#title').val())">Submit</button>
</p>

<div id="content"></div>

<?php include_once('includes/footer.php'); ?>