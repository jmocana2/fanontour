$( document ).ready(function() { //DOM OK! 
	//Alerts
	$( ".table-alerts .edit a" ).click(function(e) { //edit

		var price =  parseInt($(this).closest("td").find("span").text());

		$(this).closest("td").find("input").val(price);
		$(this).parent().fadeOut("slow", function(){
			$(this).closest("td").children(".save").fadeIn();
		})
		e.preventDefault();
	});

	$( ".table-alerts .save a" ).click(function(e) { //edit

		var price = $(this).closest("td").find("input").val();

		$(this).closest("td").find("span").text(price);
		$(this).parent().fadeOut("slow", function(){
			$(this).closest("td").children(".edit").fadeIn();
		})
		e.preventDefault();
	});

	$( ".table-alerts .btn-delete" ).click(function(e) { //edit
		$(this).closest("tr").fadeOut("slow", function(){
			$(this).closest("tr").remove();
		});	
		e.preventDefault();	
	});	
});  	