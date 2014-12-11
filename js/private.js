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
	
	//FanFriends
	if($(".share-tours").length){
		$(".share-tours").hide();
	}

	if($("#my-friends").length){
		var itemsPage = 8; //fanFriends to show
		var id_page = "#my-friends";

		$( ".btn-delete-friend" ).click(function(e) { //delete tour	
			var friend = $(this).closest("ul").children("li").eq(0).text();
			confirm("Are you sure you want to delete " + friend + " of your Fanfriend list?");
			e.preventDefault();	
		});

		$( ".btn-see-tours" ).click(function(e) { //delete tour	
			$(this).next().slideToggle();
			e.preventDefault();	
		});		
	}

	//My profile
	if($(".fanontour-mod-edit").length){
		$("#mod-edit, #mod-password").hide();

		$( ".fanontour-mod-people .btn-edit-profile" ).click(function(e) { //edit profile	
			if($("#mod-password:visible").length){
				$("#mod-password").slideToggle("slow", function(){
					$("#mod-edit").slideToggle();
				});
			}else{
				$("#mod-edit").slideToggle();
			}			
			e.preventDefault();	
		});	


		$( "#mod-edit .btn" ).click(function(e) { //edit profile	
			
			if( $("#input-email-01").val() == "" || !emailreg.test($('#input-email-01').val())){	        	
	        	$("#input-email-01").closest(".form-group").addClass("has-error");	 
	        	e.preventDefault();       	
	        }
	      
		});	

		$( "#mod-password .btn" ).click(function(e) { //edit profile	
			
			validarVacio($("#input-password-01"));
			validarVacio($("#input-password-02"));
			validarVacio($("#input-password-03"));
			
	        if(!passreg.test($('#input-password-02').val())){	        	
	        	$("#input-password-02").closest(".form-group").addClass("has-error");
	        	e.preventDefault();	        	
	        } 

	        if($("#input-password-02").val() != $("#input-password-03").val()){
	        	$("#input-password-03").closest(".form-group").addClass("has-error");
	        	e.preventDefault();
	        }
		});	

		

		$( ".fanontour-mod-people .btn-change-password" ).click(function(e) { //change password
			if($("#mod-edit:visible").length){
				$("#mod-edit").slideToggle("slow", function(){
					$("#mod-password").slideToggle();
				});
			}else{
				$("#mod-password").slideToggle();
			}		
			e.preventDefault();	
		});
	}
});  	