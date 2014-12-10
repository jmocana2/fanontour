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

	//Tours
	if($(".fanontour-mod-information").length){
		$(".fanontour-mod-information").hide();
	}

	$( ".btn-toolbar .btn-information" ).click(function(e) { //view all tour information		
		$(this).closest(".panel").find(".fanontour-mod-information").toggle();
		e.preventDefault();	
	});

	$( ".btn-toolbar .btn-print" ).click(function(e) { //view all tour information		
		window.print();
		e.preventDefault();	
	});

	$( ".btn-toolbar .btn-delete" ).click(function(e) { //delete tour	
		confirm("Are you sure that you want to delete this tour?");
		e.preventDefault();	
	});
	
});  	