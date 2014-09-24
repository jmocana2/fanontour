$( document ).ready(function() { //DOM OK!
  	
  	//Lazy load
  	if($("img.lazy").length){
	  	$(function() {
		    $("img.lazy").lazyload({
		    	threshold : 200,
		    	effect : "fadeIn"
		    });
		});
    }

	//backgrounds search box	
	$(function() {
		//=================================
		//CONFIG IMAGES
		//=================================
		 var images = ['/fanontour/img/backgrounds/home/tickets_h_600px.jpg','/fanontour/img/backgrounds/home/hotels_h_600px.jpg', '/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg'];
		//================================
		var d = document.createElement("div");
		d.style.display = 'none';
		document.body.appendChild(d);
		for (var i in images) 
		{
		  var img = document.createElement("img");
		  img.src = images[i];
		  d.appendChild(img);
		}


		$( "#fanontour-search-box .nav a" ).click(function() {
			//=================================
			//CONFIG FUNCIONALITY BACKGROUNDS
			//=================================
			var search_box_width = 922;
			//=================================
		 	var device_width = $(window).width();

		 	if(device_width >= search_box_width){
			 	var num_sec = $(this).parent().prevAll().length;
			  	$(".bg-container").fadeOut("fast", function(){		  				  
			  		$(".bg-container").css("background","url('"+ images[num_sec] +"')no-repeat 0 0");
			  		$(".bg-container").css("background-size","cover");
			  		$(this).fadeIn("fast");
			  	})
			}  	
			else{
				event.preventdefault();
			}  	
		  	
		});
	});

	//FORMS
	//
	//Dropdown-form
	$( ".dropdown-form .dropdown-menu li" ).click(function() {
		var dropdown_value = $(this).children("a").text();
		$(this).closest(".dropdown-form").find("input").attr("value",dropdown_value);
		event.preventDefault();
	});	

	//Validations
	//
	//Email validation
	var emailreg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   
    if($("#contact").length){
		$( "#contact .btn-validate" ).click(function() {

			$("#contact form").find(".has-error").removeClass("has-error");

	        if( $("#input-name-01").val() == "" ){
	        	$("#input-name-01").closest(".form-group").addClass("has-error");	        	
	        }
	        else if( $("#input-email-01").val() == "" || !emailreg.test($('#input-email-01').val())){	        	
	        	$("#input-email-01").closest(".form-group").addClass("has-error");	        	
	        }
	        else if( $("#textarea-message-01").val() == "" ){
	        	$("#textarea-message-01").closest(".form-group").addClass("has-error");	        	
	        }
	        else if( $("#captcha-01").val() == "" ){
	        	$("#captcha-01").closest(".form-group").addClass("has-error");	        	
	        }	        
		});	
	}

	//MODALS
	//
	//Register advise
	$( ".register-advise" ).click(function() {		
		$('#modal-register').modal('show');
		return false;
	});



});