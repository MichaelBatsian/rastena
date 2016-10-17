$(document).ready(function() {

	$("#phoneCall").submit(function() {
		$.ajax({
			type: "POST",
			url: "../php/mailCall.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#phoneCall").trigger("reset");
		});
		return false;
	});

});

$(document).ready(function() {

	$("#feedback").submit(function() {
		$.ajax({
			type: "POST",
			url: "../php/feedbackMail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо! Скоро мы с вами свяжемся.");
			$("#feedback").trigger("reset");
		});
		return false;
	});

});


