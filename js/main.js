$( document ).ready(function() { //DOM OK! 

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

	//ACCORDION
	//title
	$( "#modal-customized-tour input, #modal-customized-tour .glyphicon-calendar" ).click(function() {
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

		$('.date input').change(function () {
			alert($(this).val());
			var date = $(this).closest(".input-group").data("DateTimePicker").getDate();
			$(this).closest(".input-group").data("DateTimePicker").setMinDate(new Date(date));	

			/*if($(this).parent().attr("class").indexOf("departure-date") == -1){
				var arrival_date = sumaFecha(7, $(this).parent().attr("value"))
				$(this).closest("form").find(".arrive-date").attr("value", arrival_date)
			}*/		
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
	$("#driver").click(function() {
		if($(this).attr("value") == "true"){
			$("#age-field").css("display", "inline");
			$(this).attr("value","false");
		}else{
			$("#age-field").fadeOut();
			$(this).attr("value","true");
		}
	});

	//Copy cities in customized tour
	$(".city_dest").focusout(function() {
		var city_dest = $(this).val();
		$(this).closest("#modal-customized-tour").find(".city_dest").val(city_dest);    	
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
	if($("#car-tooltip").length){
		$('#car-tooltip').tooltip()
	}	
});