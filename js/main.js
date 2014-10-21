var calendar;

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
				event.preventDefault();
			}  	
		  	
		});
	});

	//ACCORDION
	//title
	$( "#modal-customized-tour input, #modal-customized-tour .glyphicon-calendar, #modal-customized-tour .dropdown" ).click(function() {
		$(this).closest(".panel").find(".panel-heading").addClass("active");
	});	

	$("#modal-customized-tour input").focusout(function() {
		var vacio = 1;
		var a_inputs =  $(this).closest(".panel-body").find(".type-reset")
		for(i=0; i<a_inputs.length;i++){
			if($(a_inputs).eq(i).val() != ""){
				vacio = 0;
			}
		}
		if(vacio){
			$(this).closest(".panel").find(".panel-heading").removeClass("active");
		}  	
  	});

	//FORMS
	//
	//Dropdown-form
	$( ".dropdown-form .dropdown-menu li" ).click(function() {
		var dropdown_value = $(this).children("a").text();
		$(this).closest(".dropdown-form").find("input").attr("value",dropdown_value);
		event.preventDefault();
	});


	//Input dates
	if($(".date").length){
		$('.datetimepicker_01, .datetimepicker_02, .datetimepicker_03, .datetimepicker_04, .datetimepicker_05, .datetimepicker_06, .datetimepicker_07, .datetimepicker_08, .datetimepicker_09, .datetimepicker_10, .datetimepicker_11, .datetimepicker_12, .datetimepicker_13, .datetimepicker_14, .datetimepicker_15, .datetimepicker_16').datetimepicker({
			pickTime: false
		});

		$('.glyphicon-calendar').click(function () {
			var date = $(this).closest(".input-group").data("DateTimePicker").getDate();
			$(this).closest(".input-group").data("DateTimePicker").setMinDate(new Date(date));		
			var str = $(this).parent().prev().attr("class");			
		});	
	}	

	//Rental car (drop off)
	$( "#conditionsAccepted, #tourConditionsAccepted " ).click(function() {
		if($(this).attr("value") == "true"){
			$(".conditionsAccepted").fadeIn();
			$(this).attr("value","false");
		}else{
			$(".conditionsAccepted").fadeOut();
			$(this).attr("value","true");
		}
	});

	//Rental car (drop off)
	$("#driver, #tour-driver").click(function() {
		if($(this).attr("value") == "true"){
			$(this).closest(".checkbox").find(".age-field").css("display", "inline");
			$(this).attr("value","false");
		}else{
			$(this).closest(".checkbox").find(".age-field").fadeOut();
			$(this).attr("value","true");
		}
	});

	//Copy cities in customized tour	
	$(".city_dest").focusout(function() {
		if(!($(".city-active").length)){
			var city_dest = $(this).val();
			$(this).closest("#modal-customized-tour").find(".city_dest").val(city_dest);
			$("#modal-customized-tour").addClass("city-active");    
		}		
  	});

  	

	//Geolocalización
	if($(".city_ori").length){

		//Get the latitude and the longitude;
		function successFunction(position) {
		    var lat = position.coords.latitude;
		    var lng = position.coords.longitude;
		    codeLatLng(lat, lng)
		}

		function errorFunction(){
		    alert("Geocoder failed");
		}

	  	var geocoder;  
		if (navigator.geolocation) {
		    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
		} 
		
		
		geocoder = new google.maps.Geocoder();

		function codeLatLng(lat, lng) {

		var latlng = new google.maps.LatLng(lat, lng);
		    geocoder.geocode({'latLng': latlng}, function(results, status) {
		      if (status == google.maps.GeocoderStatus.OK) {     
		        if (results[1]) {
		         //City
		         var city_ori = results[0].address_components[2].short_name;
		         $(".city_ori").val(city_ori);
		         }
		       }  
		    });
		}
	}

	  
	//Validations
	//Fields
	//Empty field
	function validarVacio(campo){
		var valor = $(campo).val();	
		if(valor == ""){
			$(campo).closest(".form-group").addClass("has-error error-empty");			
		}
		else{
			$(campo).closest(".form-group").removeClass("has-error error-empty");			
		}
	}

	function validarVacioAll(form){
		var validado = 0;
		var campos = $(form).find("input");

		for(i=0; i<campos.length; i++){
			if($(campos).eq(i).val() != ""){
				validado = 1;
			}
			else{
				$(form).find(".form-group").addClass("has-error");
			}
		}
		if(!(validado)){
			event.preventDefault();
		}		
	}

	function ageDriver(campo){
		if(!($(campo).val() >= 25 && $(campo).val() <= 70)){
			$(campo).closest(".form-group").addClass("has-error");
			event.preventDefault();
		}
	}

	//General input validation
	$("input[required]").focusout(function() {
		validarVacio($(this));
	});	

	$( ".dropdown-menu a" ).click(function() {
		var campo = $(this).closest(".dropdown-menu").prev("input");
		setTimeout(function(){validarVacio(campo)}, 300);
	});	
	
	//Panel errors
	function panelErrors(panel){
		if($(panel).find(".has-error").length){
			$(panel).closest(".panel").find(".panel-heading").addClass("has-error");
		}else{
			$(panel).closest(".panel").find(".panel-heading").removeClass("has-error");
		}	
	}

	//Panels validation
	function validateMandatoryPanel(panel){
		if($(panel).find(".error-empty").length){
			$(".alert-empty").fadeIn();			
			event.preventDefault();
		}		
	}

	//None Search
	function validateOneSearch(panel){
		if(!($(panel).find(".active").length)){
			$(".alert-none-search").fadeIn();
			event.preventDefault();
		}
		else{
			$(".alert-none-search").fadeOut();
		}		
	}

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

	//Home search
	if($("#fanontour-search-box").length){
		//Tickets
		$( "#tab-tickets .btn" ).click(function() {
			validarVacio($("#event-01"));
		});

		//Hotels
		$( "#tab-hotels .btn" ).click(function() {
			validarVacio($("#hotel-field-01"));
		});

		//Flights
		$( "#tab-flights .btn" ).click(function() {
			validarVacio($("#flight-field-02"));
		});	

		//Activities
		$( "#tab-activities .btn" ).click(function() {
			validarVacio($("#activity-field-01"));
		});	

		//Restaurants
		$( "#tab-restaurants .btn" ).click(function() {
			validarVacioAll($("#tab-restaurants form"));			
		});	

		//Rental cars
		$( "#tab-rent-car .btn" ).click(function() {
			validarVacio($("#car-field-01"));
			validarVacio($("#car-field-02"));
			validarVacio($("#car-field-08"));
			validarVacio($("#car-field-09"));
			validarVacio($("#car-field-11"));
			validarVacio($("#car-field-12"));

			//Return car location
			if($("#conditionsAccepted").val() == "false"){
				validarVacio($("#car-field-03"));
				validarVacio($("#car-field-04"));
			}

			//Driver age
			if($("#driver").val() == "false"){
				validarVacio($("#car-field-13"));
				ageDriver($("#car-field13"));
			}					
		});
	}

	//Customized Tour
	if($("#modal-customized-tour").length){
		$( ".btn-reset" ).click(function() {
			$(this).closest(".panel-body").find("input").val("");
			$(this).closest(".panel").find(".panel-heading").removeClass("active");
			$(this).closest(".panel").find(".has-error").removeClass("has-error");
		});	

		$( "#modal-customized-tour .btn-search" ).click(function() {
			//Hotels
			var panel = $(".panel-hotels");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-hotel-field-01"));
				validarVacio($("#datetimepicker_09"));
				validarVacio($("#datetimepicker_10"));
				validateMandatoryPanel(panel);
				panelErrors($(panel).find(".panel-body"));
			}

			//Flights
			var panel = $(".panel-flights");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-flight-field-01"));
				validarVacio($("#tour-flight-field-02"));
				validarVacio($("#datetimepicker_11"));	
				validarVacio($("#datetimepicker_12"));	
				validateMandatoryPanel(panel);	
				panelErrors($(panel).find(".panel-body"));
			}	

			//Activities
			var panel = $(".panel-activities");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-activity-field-01"));
				validarVacio($("#datetimepicker_13"));	
				validarVacio($("#datetimepicker_14"));	
				validateMandatoryPanel(panel);	
				panelErrors($(panel).find(".panel-body"));
			}


			//Rental cars
			var panel = $(".panel-rental-cars");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-car-field-01"));
				validarVacio($("#tour-car-field-03"));
				validarVacio($("#datetimepicker_15"));	
				validarVacio($("#datetimepicker_16"));
				validarVacio($("#tour-car-field-08"));
				validarVacio($("#tour-car-field-09"));
				validarVacio($("#tour-car-field-11"));
				validarVacio($("#tour-car-field-12"));		
				if($("#tourConditionsAccepted").val() == "false"){
					validarVacio($("#tour-car-field-03"));
					validarVacio($("#tour-car-field-04"));
				}
				if($("#tour-driver").val() == "false"){
					validarVacio($("#tour-car-field13"));
					ageDriver($("#tour-car-field13"));
				}

				validateMandatoryPanel(panel);	
				panelErrors($(panel).find(".panel-body"));	
			}

			validateOneSearch($("#modal-customized-tour"));

			if($("#modal-customized-tour").find(".has-error").length){
				event.preventDefault();
			}
		});
	}	
	
	

	//MODALS
	//
	//Register advise
	$( ".register-advise" ).click(function() {		
		$('#modal-register').modal('show');
		//return false;
	});

	//Customized tour
	$( ".customized-tour" ).click(function() {		
		$('#modal-customized-tour').modal('show');
		//return false;
	});

	//TOOLTIPS
	//
	//Car information
	if($(".car-tooltip").length){
		$('.car-tooltip').tooltip()
	}	
});

//FUNCTIONS

// Función que suma o resta días a la fecha indicada
// plus dates
sumaFecha = function(d, fecha)
{
	 var Fecha = new Date();
	 var sFecha = fecha || (Fecha.getDate() + "/" + (Fecha.getMonth() +1) + "/" + Fecha.getFullYear());
	 var sep = sFecha.indexOf('/') != -1 ? '/' : '-'; 
	 var aFecha = sFecha.split(sep);
	 var fecha = aFecha[2]+'/'+aFecha[1]+'/'+aFecha[0];
	 fecha= new Date(fecha);
	 fecha.setDate(fecha.getDate()+parseInt(d));
	 var anno=fecha.getFullYear();
	 var mes= fecha.getMonth()+1;
	 var dia= fecha.getDate();
	 mes = (mes < 10) ? ("0" + mes) : mes;
	 dia = (dia < 10) ? ("0" + dia) : dia;
	 var fechaFinal = dia+sep+mes+sep+anno;
	 return (fechaFinal);
}

//min calendar arrive date
function caparFecha(h, m, y){
	var fecha = h.text() + "/" + (parseInt(m) + 1) + "/" + y;
	var fecha2 = sumaFecha(7, fecha);
	
}