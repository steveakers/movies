function fnLoadMovie(term) {
	var term = term.replace(" ","+");

	$.ajax({
		type: "POST",
		url: "app/movie_details.php",
		data: term,
		datatype: "text",
	    success: function (data) {
			if (data.success == false) {
				// process failure here
			} else {
				$("#content").html(data);
			}
		}
	});
}