var calendar;

//Regular expressions
//mail
var emailreg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//password
var passreg = /(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

//Validations
//Fields
//Empty field
function validarVacio(campo){
	var valor = $(campo).val();	
	if(valor == ""){
		$(campo).closest(".form-group").addClass("has-error error-empty");
		$(campo).closest(".form-group").removeClass("has-warning");			
	}
	else{
		$(campo).closest(".form-group").removeClass("has-error error-empty");			
	}
}

function validateDate(campo) {
      var RegExPattern = /^\d{2}\/\d{2}\/\d{4}$/;
      if ((campo.match(RegExPattern)) && (campo!='')) {
            return true;
      } else {
            return false;
      }
}

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

    //checkbox
    $( "input[type='checkbox']", "input[type='radio']"  ).click(function(e) {
    	if($(this).val() == "false"){
    		$(this).val("true");
    	}else{
    		$(this).val("false");
    	}
    });
	//backgrounds search box	
	$(function() {
		//=================================
		//CONFIG IMAGES
		//=================================
		var images = ['/fanontour/img/backgrounds/home/tickets.jpg','/fanontour/img/backgrounds/home/hotels.jpg', '/fanontour/img/backgrounds/home/flights.jpg','/fanontour/img/backgrounds/home/activities.jpg','/fanontour/img/backgrounds/home/restaurants.jpg','/fanontour/img/backgrounds/home/rental-cars.jpg','/fanontour/img/backgrounds/home/customized_v2.jpg'];
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


		$( "#fanontour-search-box .nav a" ).click(function(e) {
			//=================================
			//CONFIG FUNCIONALITY BACKGROUNDS
			//=================================
			var search_box_width = 922;
			//=================================
		 	var device_width = $(window).width();

		 	if(device_width >= search_box_width){
			 	var num_sec = $(this).parent().prevAll().length;
			  	$(".bg-container").fadeOut("fast", function(){		  				  
			  		$(".bg-container").css("background","url('"+ images[num_sec] +"')no-repeat center 0");
			  		$(".bg-container").css("background-size","cover");
			  		$(this).fadeIn("fast");
			  	})
			}  	
			else{
				e.preventDefault();
			}  	
		  	
		});
	});

	//ACCORDION
	//title
	$( "#modal-customized-tour input, #modal-customized-tour .dropdown" ).click(function() {
		$(this).closest(".panel").find(".panel-heading").addClass("active");
	});	

	//BUTTONS
	//btn-up
	$( ".btn-up" ).click(function(e) {
		$('html,body').animate({scrollTop:'0px'}, 500);
		e.preventDefault();
	});

	//FORMS
	//
	//Dropdown-form
	$( ".dropdown .dropdown-menu li" ).click(function(e) {
		var dropdown_value = $(this).children("a").text();
		$(this).closest(".dropdown").find("input").attr("value",dropdown_value);
		$(this).closest(".dropdown").find("input").attr("data-value",$(this).prevAll().length);
		e.preventDefault();
	});


	//Input dates
	if($(".date").length){

		/* travel days */
		var days = 7
		/* =========== */ 
		var origin_date = getTodayDate();
		var destiny_date = sumaFecha(days, origin_date)

		$('.start_date').datetimepicker({
			minDate: origin_date,
			pickTime: false,
			defaultDate: origin_date
		});

		//Main search box
		$('#fanontour-search-box .end_date').datetimepicker({
			minDate: origin_date,
			pickTime: false,
			defaultDate: destiny_date,
			sideBySide: true
		});

		//Customized tour
		$('#modal-customized-tour .end_date, #results .end_date').datetimepicker({
			minDate: origin_date,
			pickTime: false,			
		});

		// CALENDARS MAIN SEARCH
		// ======================
		//Hotels Calendars
		$(".datetimepicker_01").on("dp.change",function (e) {
			$('.datetimepicker_02').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_02').data("DateTimePicker").setMinDate(e.date);
        });

        //Flights Calendars
		$(".datetimepicker_03").on("dp.change",function (e) {
			$('.datetimepicker_04').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_04').data("DateTimePicker").setMinDate(e.date);
        });

        //Activities Calendars
		$(".datetimepicker_05").on("dp.change",function (e) {
			$('.datetimepicker_06').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_06').data("DateTimePicker").setMinDate(e.date);
        });

        //Rental cars Calendars
		$(".datetimepicker_07").on("dp.change",function (e) {
			$('.datetimepicker_08').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_08').data("DateTimePicker").setMinDate(e.date);
        });

        // CALENDARS CUSTOMIZED TOUR
		// =========================
		// Hotels Calendars
		// //Hotels Calendars
		$(".datetimepicker_09").on("dp.change",function (e) {
			$('.datetimepicker_10').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_10').data("DateTimePicker").setMinDate(e.date);
        });

        //Flights Calendars
		$(".datetimepicker_11").on("dp.change",function (e) {
			$('.datetimepicker_12').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_12').data("DateTimePicker").setMinDate(e.date);
        });

        //Activities Calendars
		$(".datetimepicker_13").on("dp.change",function (e) {
			$('.datetimepicker_14').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_14').data("DateTimePicker").setMinDate(e.date);
        });

        //Rental cars Calendars
		$(".datetimepicker_15").on("dp.change",function (e) {
			$('.datetimepicker_16').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_16').data("DateTimePicker").setMinDate(e.date);
        });
		// CALENDARS RESULTS
		// =========================
		//activities
		$(".datetimepicker_17").on("dp.change",function (e) {
			$('.datetimepicker_18').data("DateTimePicker").setDate(e.date);
            $('.datetimepicker_18').data("DateTimePicker").setMinDate(e.date);
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
	/*if($(".city_ori").length){

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
	}*/

	  
	//Validations
	//Fields

	function validarVacioAll(form, e){
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
			e.preventDefault();
		}		
	}

	function ageDriver(campo, e){
		
		if($(campo).val() >= 25 && $(campo).val() <= 70){
			$(campo).closest(".form-group").addClass("has-error");
			$(".alert-age").fadeIn();	
			e.preventDefault();
		}else{
			$(campo).closest(".form-group").removeClass("has-error");
			$(".alert-age").fadeOut();	
		}
	}

	//Panel errors
	function panelErrors(panel){
		if($(panel).find(".has-error").length){
			$(panel).closest(".panel").find(".panel-heading").addClass("has-error");
		}else{
			$(panel).closest(".panel").find(".panel-heading").removeClass("has-error");
		}

		if($(".panel-heading.has-error").length){
			$(".collapse.in").removeClass("in");
			$(".panel-heading.has-error").eq(0).addClass("active");
			$(".panel-heading.has-error").eq(0).next(".collapse").addClass("in");
			$(".panel-heading.has-error").eq(0).next(".collapse").css("height", "auto");
		}	
	}

	//Panels validation
	function validateMandatoryPanel(panel, e){
		if($(panel).find(".error-empty").length){
			$(".alert-empty").fadeIn();			
			e.preventDefault();
		}
	}

	//None Search
	function validateOneSearch(panel, e){
		if(!($(panel).find(".active").length)){
			$(".alert-none-search").fadeIn();
			e.preventDefault();
		}
		else{
			$(".alert-none-search").fadeOut();
		}		
	}

	//Panel State
	function panelState(panel, e){
		var validado = 0;
		var warning = 0;
		var campos = $(panel).find("input.mandatory");

		for(i=0; i<campos.length; i++){
			if($(campos).eq(i).val() == ""){
				$(campos).eq(i).closest(".form-group").addClass("has-warning");
				warning = 1;
			}
			else{
				$(campos).eq(i).closest(".form-group").removeClass("has-warning");
				$(campos).eq(i).closest(".form-group").removeClass("has-error");
			}
		}

		if(warning){
			$(panel).find(".panel-heading").addClass("warning");
			$(".alert-empty-war").fadeIn();	
		}else{
			$(panel).find(".panel-heading").removeClass("warning");
			$(panel).find(".panel-heading").removeClass("has-error");
			$(".alert-empty-war, .alert-empty").fadeOut();	
		}				
	}  


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

	//Log-in validation	
	function loginValidation(e){
		$("#form-login").find(".has-error").removeClass("has-error");

		validarVacio($("#input-email-01"));
		validarVacio($("#input-password-01"));

        if(!emailreg.test($('#input-email-01').val())){        	    	
        	$("#input-email-01").closest(".form-group").addClass("has-error");
        	e.preventDefault();	        	
        } 
	}	

	$( "#form-login .btn" ).click(function(e) {
		loginValidation(e);		       
	});

	$("#form-login").on("change",".has-error input",function(e){    	
		loginValidation(e); 	
    });

	//Register validation
	function registerValidation(e){
		$("#form-register").find(".has-error").removeClass("has-error");

		validarVacio($("#input-name-01"));
		validarVacio($("#input-name-02"));
		validarVacio($("#input-email-01"));
		validarVacio($("#input-password-01"));
		validarVacio($("#input-password-02"));

        if(!emailreg.test($('#input-email-01').val())){	        	
        	$("#input-email-01").closest(".form-group").addClass("has-error");	
        	e.preventDefault();        	
        }   

        if(!passreg.test($('#input-password-01').val())){	        	
        	$("#input-password-01").closest(".form-group").addClass("has-error");
        	e.preventDefault();	        	
        } 

        if($("#input-password-01").val() != $("#input-password-02").val()){
        	$("#input-password-02").closest(".form-group").addClass("has-error");
        	e.preventDefault();
        }

        if($("#terms-conditions").val() == "false"){
        	$("#terms-condition").closest(".form-group").addClass("has-error");
        	e.preventDefault();
        }
	}

	$( "#form-register .btn" ).click(function(e) {
		registerValidation(e);
	});	

	 $("#form-register").on("change",".has-error input",function(e){    	
		registerValidation(e); 	
    });


	//Home search	
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

	$( "#one_way" ).click(function() {
		$(".return-date").fadeOut();
	});	

	$( "#return" ).click(function() {
		$(".return-date").fadeIn();
	});

	//Activities
	$( "#tab-activities .btn" ).click(function() {		
		validarVacio($("#activity-field-01"));
	});	

	//Restaurants
	$( "#tab-restaurants .btn" ).click(function(e) {
		validarVacioAll($("#tab-restaurants form"), e);			
	});	

	//Rental cars
	$( "#tab-rent-car .btn" ).click(function(e) {
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
			ageDriver($("#car-field13"), e);
		}					
	});
	

	//Customized Tour
	if($("#modal-customized-tour").length){

		$( "#modal-customized-tour input[type='text']").focusout(function(e) {			
			var panel = $(this).closest(".panel");
			panelState(panel, e);
		});	

		$("#modal-customized-tour .start_date, #modal-customized-tour .end_date").on("dp.change",function (e) {
			$(this).closest(".panel").find(".panel-heading").addClass("active");
			var panel = $(this).closest(".panel");
			panelState(panel, e);
        });

        $( "#modal-customized-tour .dropdown-menu a,  #modal-customized-tour input[type='checkbox']" ).click(function(e) {
			var panel = $(this).closest(".panel");
			setTimeout(function(){panelState(panel, e)}, 10);			
		});

		$( "#tourConditionsAccepted" ).click(function(e) {
			if($(this).val() == "false"){
				$("#tour-car-field-05").addClass("mandatory");
				$("#tour-car-field-06").addClass("mandatory");
			}else{
				$("#tour-car-field-05").removeClass("mandatory");
				$("#tour-car-field-06").removeClass("mandatory");
			}		
		});

		$( "#tour-driver" ).click(function(e) {
			if($(this).val() == "false"){
				$("#tour-car-field13").addClass("mandatory");				
			}
			else{
				$("#tour-car-field13").removeClass("mandatory");
			}		
		});

		$( ".btn-reset" ).click(function() {
			$(this).closest(".panel-body").find("input").val("");
			$(this).closest(".panel").find(".panel-heading").removeClass("active");
			$(this).closest(".panel").find(".panel-heading").removeClass("warning");
			$(this).closest(".panel").find(".has-error").removeClass("has-error");
			$(this).closest(".panel").find(".has-warning").removeClass("has-warning");

			if(!($(".panel-heading.waring").length)){
				$(".alert-warning").hide();
			}

			if(!($(".panel-heading.has-error").length)){
				$(".alert-danger").hide();
			}
		});	

		$( "#modal-customized-tour .btn-search" ).click(function(e) {
			//Tickets
			var panel = $(".panel-tickets");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-event-01"));
				validateMandatoryPanel(panel, e);
				panelErrors($(panel).find(".panel-body"));
			}

			//Hotels
			var panel = $(".panel-hotels");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-hotel-field-01"));
				validarVacio($("#datetimepicker_09"));
				validarVacio($("#datetimepicker_10"));
				validateMandatoryPanel(panel, e);
				panelErrors($(panel).find(".panel-body"));
			}

			//Flights
			var panel = $(".panel-flights");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-flight-field-01"));
				validarVacio($("#tour-flight-field-02"));
				validarVacio($("#datetimepicker_11"));	
				validarVacio($("#datetimepicker_12"));	
				validateMandatoryPanel(panel, e);	
				panelErrors($(panel).find(".panel-body"));
			}	

			//Activities
			var panel = $(".panel-activities");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-activity-field-01"));
				validarVacio($("#datetimepicker_13"));	
				validarVacio($("#datetimepicker_14"));	
				validateMandatoryPanel(panel, e);	
				panelErrors($(panel).find(".panel-body"));
			}

			//Restaurants
			var panel = $(".panel-restaurants");
			if(($(panel).find(".panel-heading").attr("class").indexOf("active")) != -1){
				validarVacio($("#tour-restaurant-field-02"));
				validarVacio($("#tour-restaurant-field-03"));	
				validateMandatoryPanel(panel, e);	
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
					validarVacio($("#tour-car-field-05"));
					validarVacio($("#tour-car-field-06"));
				}

				if($("#tour-driver").val() == "false"){
					$("#tour-car-field13").addClass("mandatory");
					validarVacio($("#tour-car-field13"));
					ageDriver($("#tour-car-field13"), e);
				}
				

				validateMandatoryPanel(panel, e);	
				panelErrors($(panel).find(".panel-body"));					
			}

			validateOneSearch($("#modal-customized-tour"), e);

			if(!($("#modal-customized-tour").find(".has-warning").length)){
				$(".alert-empty-war").fadeOut();
			}

			if($("#modal-customized-tour").find(".has-error").length){
				e.preventDefault();
			}else{
				var active_panels = $(".panel .active").parent(".panel");

				for(i=0; i<active_panels.length; i++){
					$(active_panels[i]).find(".panel_activate").attr("value",true);					
				}				
			}

		});
	}	
		
	function orderFanontour(orderby){
		orderby = parseInt(orderby);
		switch(orderby){
			case 0:				
				$('.mod-result').tsort('li.price',{order:'desc', attr:'data-value'});
				break;
			case 1:
				$('.mod-result').tsort('li.price',{order:'asc', attr:'data-value'});
				break;
			case 2:
				$('.mod-result').tsort('li.duration',{order:'desc', attr:'data-value'});
				break;
			case 3:
				$('.mod-result').tsort('li.duration',{order:'asc', attr:'data-value'});
				break;		
		}
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

	if($(".new-tour").length){
		$('#modal-customized-tour').modal('show');
	}

	//Alert	
	$( ".btn-alert" ).click(function() {
		$('#modal-alert').modal('show');		
	});	

	$("#modal-alert").on("click",".btn-new-alert",function(e){   		

		var url="/fanontour/php/alert.php";
		var price = $("#input-price-01");

		$.ajax({
		  type: "get",		  
		  data: "?price=" + price,
		  url: url		  
		})
		.done(function() {
		   $("#modal-alert").find(".alert-success").removeClass("hide");		   	
		})
		.fail(function() {
		   $("#modal-alert").find(".alert-danger").removeClass("hide");	
		})	
	});	

	$('#modal-alert').on('hidden.bs.modal', function (e) {
	   $("#modal-alert").find(".alert").addClass("hide");
	})
	
	//TOOLTIPS
	//
	//Car information
	if($(".car-tooltip").length){
		$('.car-tooltip').tooltip()
	}	
});

//FUNCTIONS

getTodayDate = function(){
	var f = new Date();
	var date = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
	return date;	
}

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