function fnShowMovie(terms) {
	var keywords = terms.replace(" ","+");
	
	$.ajax({
        url: "https://itunes.apple.com/search?term=" + keywords + "&country=US&media=movie",
        dataType: 'JSONP'
	})
    .done(function(data) {
		$.ajax({
			type: "POST",
			url: "app/movie_details.php",
			data: JSON.stringify(data),
			datatype: "json",
		    success: function (data) {
				if (data.success == false) {
					// process failure here
				} else {
					$("#content").html(data);
				}
			}
		});
	})
}