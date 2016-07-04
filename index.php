<?php include_once('includes/header.php'); ?>

<form id="frmFilter" onsubmit="return false;">
	Title: <input id="title" type="text" name="title" autofocus> 
	<input type="button" id="btnSearch" value="Search">
</form>

<div id="content"></div>

<?php include_once('includes/footer.php'); ?>

<script type="text/javascript">

$(document).ready(function() {
	$("#title").keypress(function() {
		if(event.keyCode == 13) { fnSubmitForm(); }
	});
	
	$("#btnSearch").click(function() {
		fnSubmitForm();
	});
});

function fnSubmitForm() {
	fnLoadMovie($('#frmFilter').serialize());
	$("#title").val("");
}

</script>