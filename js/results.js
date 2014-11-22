$( document ).ready(function() { //DOM OK! 

	function getSuppliers(ticket, offers){

	if(offers > 1){
		var resultHtml = "<div class='table-responsive'>";
		    resultHtml += "<table class='table table-striped'>";
		    resultHtml += "<thead><tr>";
			resultHtml += "<th scope='col'>Source</th>";
			resultHtml += "<th scope='col'>Price</th>";
			resultHtml += "<th scope='col' class='text-right'><a class='btn-hide' href='#' rel='no-follow'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></th>";
			resultHtml += "</tr></thead><tbody>";

			$(ticket).find("source").each(function () {					    
				 
				var price = $(this).find('price').text();;		       			      			   
			   	var source = $(this).find('source_name').text();
			  	var url = $(this).find('url').text()	

				resultHtml += "<tr><td>"+ source +"</td><td>"+ price +" &euro;</td><td class='text-right'><a class='btn btn-search btn-small' href='"+ url +"'>Book here</a></td></tr>";
			});				    
							    	
			resultHtml += "</tbody></table></div>";
		}else{
			var resultHtml = "";
		}
		return resultHtml;
	}

	function filterByName(element, what){
		if($(element).find('name').text().toLowerCase().indexOf(what) != -1){
			return true;	       	   	
		}else{
			return false;
		}
	}

	function filterByPlace(element, where){
		if(($(element).find('city').text().toLowerCase().indexOf(where) != -1) || ($(element).find('place').text().toLowerCase().indexOf(where) != -1) ){
			return true;	       	   	
		}else{
			return false;
		}
	}

	function filterByPrice(val_price, v1min, v1max){
		if(val_price >= v1min && val_price <= v1max){
			return true;	       	   	
		}else{
			return false;
		}
	}

	function filterByDuration(val_duration, v2min, v2max){
		if(val_duration >= v2min && val_duration <= v2max){
			return true;	       	   	
		}else{
			return false;
		}	
	}

	function filterByScales(scale, scales){
		if(scale == "true"){
			if(scales == 0){
				return true;
			}else{
				return false;
			}	
		}else{
			return true;			    			
		}	
	}

	function filterByCousine(element, cousine){
		console.log($(element).find('cousine').text().toLowerCase());
		if($(element).find('cousine').text().toLowerCase().indexOf(cousine) != -1 || $(element).find('description').text().toLowerCase().indexOf(cousine) != -1){
			return true;	       	   	
		}else{
			return false;
		}
	}


	//RESULTS
	//=============== TICKETS ==================
    function ticketResults(){
    	//************* CONFIG ***************			
		var min_price = 0;
		var max_price = 2000;
		var itemsPage = 10;
		var id_page = "#tickets";		
		//************* CONFIG ***************

		var what = "";
		var where = "";
		var v1min = min_price;
		var v1max = max_price;			

		$(id_page + ' .price-slider').slider();

		function filterTickets(){

			function getResult(element){
			   var name = $(element).find('name').text();
	       	   var description = $(element).find('description').text();
	       	   var place = $(element).find('place').text();
	       	   var city = $(element).find('city').text();
	       	   var date = $(element).find('date').text();
   			   var image = $(element).find('image').text();
   			   var price = $(element).find('source').eq(0).find('price').text();		       			      			   
   			   var source = $(element).find('source').eq(0).find('source_name').text();
   			   var url = $(element).find('source').eq(0).find('url').text();
   			   var num_offers = $(element).find("source").length;
		       
		       var resultHtml = "<li class='mod-result'><div class='mod-img'><img src="+ image +" alt=" + name +"></div>";
		        resultHtml += "<div class='mod-txt'><h2>"+ name +"</h2><p>" + place + ", " + city + " - <em>" + date +"</em></p><p>"+ description +"</p></div>";
		        resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li><span class='fanontour-icon icon-icons-fanontour_source2'></span> Found in <strong>"+ source +"</strong></li>";			
	       	    if(num_offers > 1){
	       	   	 resultHtml += "<li><a href='#' class='more-offers' rel='nofollow'>See all offers</a></li>";
	       	   	} 
	       	    resultHtml += "</ul></div>";
	       	    resultHtml += getSuppliers($(element), num_offers);
	       	    resultHtml += "</li>";
	       	    return resultHtml;
			}

			$(id_page + " .results ul").remove();
		  	var resultHtml = "<ul class='list_results'>";

		    $.get("/fanontour/xml/results/tickets.xml", function (xml) {
			    $(xml).find("ticket").each(function () {

			       var val_price = parseInt($(this).find('source').eq(0).find('price').text());			    
			       			    			
			       //FILTERING...			    			
	    		   if(filterByName($(this), what)){ //WHAT?
			       	   if(filterByPlace($(this), where)){ //WHERE
			       	   		if(filterByPrice(val_price, v1min, v1max)){ //PRICE?
			       	  			resultHtml += getResult($(this)); //OK! DISPLAY RESULT
			       	  		}
			       		} 	
			       }
			    });

				resultHtml += "</ul>";
				$(id_page + " .results").html(resultHtml).promise().done(function(){
       				orderFanontour($(id_page + " .sort-field-01").attr("data-value"));
       				paginarFanontour($(id_page + " .items-field-01").val(), id_page, 1);
       				setResults();      				       				
    			});
			});
		}

		//SLIDER		
		$(id_page + ' .price-slider').slider()
		  .on('slideStop', function(ev){

		  	//Get min-max values
		  	//Min max prices
		  	if($(id_page + " .price-slider").val() == ""){
		  		var interval = min_price + "," + max_price;
		  	}else{
		  		var interval = $(id_page + " .price-slider").val();
		  	}

		  	var res = interval.split(",");
		    v1min = res[0];
		    v1max = res[1];

		    filterTickets();	  	
		});

		//WHAT? FILTER
		$( ".filter-name .btn" ).click(function() {			
			what = $(this).closest(".form-group").find("input").val().toLowerCase();
			filterTickets();
		});	 

		//WHERE? FILTER
		$( ".filter-where .btn" ).click(function() {	
			where = $(this).closest(".form-group").find("input").val().toLowerCase();			
			filterTickets();
		}); 

		//PAGINATION
		paginarFanontour(itemsPage, id_page, 1);

		//SCROLL
		//$(id_page + ' .wrapper').TrackpadScrollEmulator({ autoHide: false });
		
    }
    //=========== / TICKETS =============
    //============= HOTELS ==============
    function hotelResults(){
    	//************* CONFIG ***************			
		var min_price = 0;
		var max_price = 2000;
		var itemsPage = 10;
		var id_page = "#hotels";
		//************* CONFIG ***************

		var v1min = min_price;
		var v1max = max_price;

		$(id_page + ' .price-slider').slider();

		function filterHotels(type){

			function getResult(element){
			   var name = $(element).find('name').text();
   			   var address = $(element).find('address').text();
   			   var city = $(element).find('city').text();
   			   var image = $(element).find('image').text();
   			   var price = $(element).find('source').eq(0).find('price').text();		       			      			   
   			   var source = $(element).find('source').eq(0).find('source_name').text();
   			   var url = $(element).find('source').eq(0).find('url').text();
   			   var num_offers = $(element).find("source").length;
		       
		       var resultHtml = "<li class='mod-result'><div class='mod-img'><img src="+ image +" alt=" + name +"></div>";
		       resultHtml += "<div class='mod-txt'><h2>"+ name +"</h2><p>" + address +" - " + city + "</p></div>";
		       resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li><span class='fanontour-icon icon-icons-fanontour_source'></span> Found in <strong>"+ source +"</strong></li>";			
			   if(num_offers > 1){
	       	   	 resultHtml += "<li><a href='#' class='more-offers' rel='nofollow'>See all offers</a></li>";
	       	   	} 
	       	    resultHtml += "</ul></div>";
	       	    resultHtml += getSuppliers($(element), num_offers);
	       	    resultHtml += "</li>";
	       	    return resultHtml;
			}	

			$(id_page + " .results ul").remove();
		  	var resultHtml = "<ul class='list_results'>";

		    $.get("/fanontour/xml/results/hotels.xml", function (xml) {
			    $(xml).find("hotel").each(function () {	
					
			    	var val_price = parseInt($(this).find('source').eq(0).find('price').text());	

			    	//FILTERING...
					if(filterByPrice(val_price, v1min, v1max)){ //PRICE?
			       		resultHtml += getResult($(this)); //OK! DISPLAY RESULT
			       	}			       
			    });

				resultHtml += "</ul>";
				$(id_page + " .results").html(resultHtml).promise().done(function(){
       				orderFanontour($(id_page + " .sort-field-01").attr("data-value"));
       				paginarFanontour($(id_page + " .items-field-01").val(), id_page, 1); 
       				setResults();     				       				
    			});
			});
		}

		//SLIDER
		$(id_page + ' .price-slider').slider()
		  .on('slideStop', function(ev){

		  	//Get min-max values
		  	//Min max prices
		  	if($(id_page + " .price-slider").val() == ""){			  		
		  		var interval = min_price + "," + max_price;
		  	}else{			  		
		  		var interval = $(id_page + " .price-slider").val();			  		
		  	}

		  	var res = interval.split(",");
		    v1min = res[0];
		    v1max = res[1];

		    filterHotels();	  	
		});

		//PAGINATION
		paginarFanontour(itemsPage, id_page, 1);

		//SCROLL
		//$(id_page + ' .wrapper').TrackpadScrollEmulator({ autoHide: false });
    }
    //============ / HOTELS ================
    //============= FLIGHTS ================
    function flightResults(){
    	//************* CONFIG ***************
		var min_price = 0;
		var max_price = 4000;
		var itemsPage = 10;
		var id_page = "#flights";
		//************* CONFIG ***************

		var v1min = min_price;
		var v1max = max_price;
		var name = $(".list_results li").eq(0).find("h2").text();
		var scale;

		$(id_page + ' .price-slider').slider();

		function filterFlights(type){

			function getResult(element){
			   var route = $(element).find('route').text();   			  
   			   var image = $(element).find('image').text();
   			   var scales = parseInt($(element).attr("scale"));
   			   var departure_time = $(element).find('departure_time').text();
   			   var arrival_time = $(element).find('arrival_time').text();
   			   var price = $(element).find('source').eq(0).find('price').text();		       			      			   
   			   var source = $(element).find('source').eq(0).find('source_name').text();
   			   var url = $(element).find('source').eq(0).find('url').text();
   			   var num_offers = $(element).find("source").length;
		       
		       var resultHtml = "<li class='mod-result'>";
		       resultHtml += "<div class='mod-txt'><div class='clearfix'><h2 class='f-left'>"+ name +"</h2>";
		       resultHtml += "<p class='f-right'>Fligth with: <img src='"+ image +"' alt='"+ name +"'></p></div>";
		       resultHtml += "<p class='c-both route'>" + route; 
		       if(scales == 1){
		       	  resultHtml += "- <strong>This flight have one scale</strong> <span class='fanontour-icon icon-icons-fanontour_scale'></span>"
		       }
			    resultHtml += "</p>";
			    resultHtml += "<ul><li>Departure time: " + departure_time + "</li><li>Arrival time: " + arrival_time + "</li></ul></div>";	
			
		        resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li><span class='fanontour-icon icon-icons-fanontour_source'></span> Found in <strong>"+ source +"</strong></li>";			
			    if(num_offers > 1){
	       	   	 resultHtml += "<li><a href='#' class='more-offers' rel='nofollow'>See all offers</a></li>";
	       	   	} 
	       	    resultHtml += "</ul></div>";
	       	    resultHtml += getSuppliers($(element), num_offers);
	       	    resultHtml += "</li>";
	       	    return resultHtml;
			}			

			$(id_page + " .results ul").remove();
		  	var resultHtml = "<ul class='list_results'>";

		    $.get("/fanontour/xml/results/flights.xml", function (xml) {
			    $(xml).find("flight").each(function () {	

			       var val_price = parseInt($(this).find('source').eq(0).find('price').text());
			       var scales = $(this).attr("scale");	

			    	//FILTERING...
					if(filterByPrice(val_price, v1min, v1max)){ //PRICE?
			       	    if(filterByScales(scale, scales)){ //PRICE?
			       		 	resultHtml += getResult($(this)); //OK! DISPLAY RESULT
			       		}
			       	}
			    });

				resultHtml += "</ul>";
				$(id_page + " .results").html(resultHtml).promise().done(function(){
       				orderFanontour($(id_page + " .sort-field-01").attr("data-value"));
       				paginarFanontour($(id_page + " .items-field-01").val(), id_page, 1); 
       				setResults();      				       				
    			});
			});
		}

		//SLIDER
		$(id_page + ' .price-slider').slider()
		  .on('slideStop', function(ev){

		  	//Get min-max values
		  	//Min max prices
		  	if($(id_page + " .price-slider").val() == ""){
		  		var interval = min_price + "," + max_price;
		  	}else{
		  		var interval = $(id_page + " .price-slider").val();
		  	}		  	
		    
		    var res = interval.split(",");
		    v1min = res[0];
		    v1max = res[1];		    

		    filterFlights(0);	  	
		});

		//SCALES FILTER
		$( ".filter-scales input" ).click(function() {	
			scale = $(this).val();

			filterFlights(1);
		});

		//PAGINATION
		paginarFanontour(itemsPage, id_page, 1);

		//SCROLL
		//$(id_page + ' .wrapper').TrackpadScrollEmulator({ autoHide: false });
    }
    //============= FLIGHTS ================
	//=========== ACTIVITIES ===============
	function activityResults(){			
		//************* CONFIG ***************
		var min_duration = 0;
		var max_duration = 120;
		var min_price = 0;
		var max_price = 600;
		var itemsPage = 10;
		var id_page = "#activities";
		//************* CONFIG ***************

		var v1min = min_price;
		var v1max = max_price;
		var v2min = min_duration;
		var v2max = max_duration;

		$('#activities #price-slider,#activities #duration-slider').slider()

		function filterActivities(){

			function getResult(element, val_duration){			

			   var name = $(element).find('name').text();
   			   var description = $(element).find('description').text();
   			   var image = $(element).find('image').text();   			   
   			   var duration = $(element).find('duration').text();     			   
   			   var price = $(element).find('source').eq(0).find('price').text();		       			      			   
   			   var source = $(element).find('source').eq(0).find('source_name').text();
   			   var url = $(element).find('source').eq(0).find('url').text();
   			   var num_offers = $(element).find("source").length;
   			   
		       resultHtml = "<li class='mod-result'><div class='mod-img'><img src="+ image +" alt=" + name +"></div>";		       
		       resultHtml += "<div class='mod-txt'><h2>"+ name +"</h2><p>"+ description +"</p></div>";
		       resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li class='duration' data-value='"+ val_duration +"'><span class='fanontour-icon icon-icons-fanontour_clock'></span> "+ duration +" <abbr title='approximately'> approx.</abbr></li><li><span class='fanontour-icon icon-icons-fanontour_source'></span> Found in <strong>"+ source +"</strong></li>";			
				if(num_offers > 1){
	       	   	 resultHtml += "<li><a href='#' class='more-offers' rel='nofollow'>See all offers</a></li>";
	       	   	} 
	       	    resultHtml += "</ul></div>";
	       	    resultHtml += getSuppliers($(element), num_offers);
	       	    resultHtml += "</li>";
	       	    return resultHtml;
			}

			$(id_page + " .results ul").remove();
		  	var resultHtml = "<ul class='list_results'>";

		    $.get("/fanontour/xml/results/activity.xml", function (xml) {
			    $(xml).find("activity").each(function () {
			      
			       var val_price = parseInt($(this).find('source').eq(0).find('price').text());
			       var val_duration = parseInt($(this).find('duration').text());
			       if(isNaN(val_duration)){
			       	val_duration = max_duration;
			       }

			       //FILTERING...
			      
					if(filterByPrice(val_price, v1min, v1max)){ //PRICE?						 						
			       	    if(filterByDuration(val_duration, v2min, v2max)){ //DURATION?			       	    				       		 	
			       		 	resultHtml += getResult($(this), val_duration); //OK! DISPLAY RESULT
			       		}
			       	}		   			      
			    });

				resultHtml += "</ul>";
				$(id_page + " .results").html(resultHtml).promise().done(function(){
       				orderFanontour($(id_page + " .sort-field-01").attr("data-value"));
       				paginarFanontour($(id_page + " .items-field-01").val(), id_page, 1); 
       				setResults();     				       				
    			});
			});
		}

		//SLIDER
		$(id_page + ' .price-slider, ' + id_page + ' .duration-slider').slider()
		  .on('slideStop', function(ev){

		  	//Get min-max values
		  	//Min max prices
		  	if($(id_page + " .price-slider").val() == ""){
		  		var interval = min_price + "," + max_price;
		  	}else{
		  		var interval = $(id_page + " .price-slider").val();
		  	}

		  	if($(id_page + " .duration-slider").val() == ""){
		  		var interval2 = min_duration + "," +  max_duration;
		  	}else{
		  		var interval2 = $(id_page + " .duration-slider").val();
		  	}
		    
		    var res = interval.split(",");
		    v1min = res[0];
		    v1max = res[1];
		    //Min max duration
		 
		    var res2 = interval2.split(",");
		    v2min = res2[0];
		    v2max = res2[1];

		    filterActivities();	  	
		});

		//PAGINATION
		paginarFanontour(itemsPage, id_page, 1);

		//SCROLL			
		//$(id_page + ' .wrapper').TrackpadScrollEmulator({ autoHide: false });
    }
    //=========== / ACTIVITIES ============= 
    //============= RESTAURANTS ============
    function restaurantResults(){
    	//************* CONFIG ***************			
		var itemsPage = 5;
		var id_page = "#restaurants";
		//************* CONFIG ***************

		var cousine;
		
		function filterRestaurants(){
			function getResult(element){
			   var name = $(element).find('name').text();
	       	   var description = $(element).find('description').text();
	       	   var address = $(element).find('address').text();
	       	   var city = $(element).find('city').text();	       	   
   			   var image = $(element).find('image').text();   			  	       			      			   
   			   var source = $(element).find('source').text();
   			   var url = $(element).find('url');   			   
		       
		       var resultHtml = "<li class='mod-result'><div class='mod-img'><img src="+ image +" alt=" + name +"></div>";
		        resultHtml += "<div class='mod-txt'><h2>"+ name +"</h2><p>" + address + ", " + city +"</p><p>" + description +"</p></div>";
		        resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li><span class='fanontour-icon icon-icons-fanontour_cousine'></span> Cousine: <strong>"+ cousine +"</strong></li><li><span class='fanontour-icon icon-icons-fanontour_source2'></span> Found in <strong>"+ source +"</strong></li></ul></div></li>";			
	       	   
	       	    return resultHtml;
			}

			$(id_page + " .results ul").remove();
		  	var resultHtml = "<ul class='list_results'>";

		    $.get("/fanontour/xml/results/restaurants.xml", function (xml) {
			    $(xml).find("restaurant").each(function () {			       		    
			       			    			
			        //FILTERING...			    			
	    		    if(filterByCousine($(this), cousine)){ //COUSINE?
			       	 	resultHtml += getResult($(this)); //OK! DISPLAY RESULT			       	  	
			        }
			    });

				resultHtml += "</ul>";
				$(id_page + " .results").html(resultHtml).promise().done(function(){
       				orderFanontour($(id_page + " .sort-field-01").attr("data-value"));
       				paginarFanontour($(id_page + " .items-field-01").val(), id_page, 1);
       				setResults();      				       				
    			});
			});
		}

		//WHAT? FILTER
		$( ".filter-cousine .btn" ).click(function() {			
			cousine = $(this).closest(".form-group").find("input").val().toLowerCase();
			filterRestaurants();
		});

		//PAGINATION
		paginarFanontour(itemsPage, id_page, 1);	

		//SCROLL
		//$(id_page + ' .wrapper').TrackpadScrollEmulator({ autoHide: false });		
    }
    //========== / RESTAURANTS =============   
    //=========== RENTAL CARS ==============
    function rentalcarResults(){
    	//************* CONFIG ***************
		var min_price = 0;
		var max_price = 4000;
		var itemsPage = 10;
		var id_page = "#rental-cars";
		//************************************

		var v1min = min_price;
		var v1max = max_price;

		$(id_page + ' .price-slider').slider();

		function filterCars(){

			function getResult(element){
			   var name = $(element).find('name').text();
   			   var address = $(element).find('address').text();
   			   var doors = $(element).find('doors').text();
   			   var image = $(element).find('image').text();
   			   var price = $(element).find('source').eq(0).find('price').text();		       			      			   
   			   var source = $(element).find('source').eq(0).find('source_name').text();
   			   var url = $(element).find('source').eq(0).find('url').text();
   			   var num_offers = $(element).find("source").length;
		       
		       resultHtml = "<li class='mod-result'><div class='mod-img'><img src="+ image +" alt=" + name +"></div>";
				       resultHtml += "<div class='mod-txt'><h2>"+ name +"</h2><p>Pick up date: <strong>10/11/2014 (11:20)</strong> | Drop off date: <strong>12/11/2014 (11:20)</strong></p><p>Pick up address: <strong>"+ address +"</strong></p></div>";
				       resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li class='doors' data-value="+ doors + "><span class='fanontour-icon icon-icons-fanontour_doors'></span>" + doors +" doors;</li><li><span class='fanontour-icon icon-icons-fanontour_source'></span> Found in <strong>"+ source +"</strong></li>";
			   if(num_offers > 1){
	       	   	 resultHtml += "<li><a href='#' class='more-offers' rel='nofollow'>See all offers</a></li>";
	       	   	} 
	       	    resultHtml += "</ul></div>";
	       	    resultHtml += getSuppliers($(element), num_offers);
	       	    resultHtml += "</li>";
	       	    return resultHtml;
			}	

			$(id_page + " .results ul").remove();
		  	var resultHtml = "<ul class='list_results'>";

		    $.get("/fanontour/xml/results/cars.xml", function (xml) {
			    $(xml).find("car").each(function () {

			    	var val_price = parseInt($(this).find('source').eq(0).find('price').text());

			    	//FILTERING...
					if(filterByPrice(val_price, v1min, v1max)){ //PRICE?
			       		resultHtml += getResult($(this)); //OK! DISPLAY RESULT
			       	}
			            
			    });

				resultHtml += "</ul>";
				$(id_page + " .results").html(resultHtml).promise().done(function(){
       				orderFanontour($(id_page + " .sort-field-01").attr("data-value"));
       				paginarFanontour($(id_page + " .items-field-01").val(), id_page, 1); 
       				setResults();      				       				
    			});
			});
		}

		//SLIDER
		$(id_page + ' .price-slider').slider()
		  .on('slideStop', function(ev){

		  	//Get min-max values
		  	//Min max prices
		  	if($(id_page + " .price-slider").val() == ""){
		  		var interval = min_price + "," + max_price;
		  	}else{
		  		var interval = $(id_page + " .price-slider").val();
		  	}		  	
		    
		    var res = interval.split(",");
		    v1min = res[0];
		    v1max = res[1];		    

		    filterCars();	  	
		});

		//PAGINATION
		paginarFanontour(itemsPage, id_page, 1);

		//SCROLL
		//$(id_page + ' .wrapper').TrackpadScrollEmulator({ autoHide: false });
    }
    //============= RENTAL CARS ================    
    
        
    function paginarFanontour(num_pag, id_pag, init){
      /* get new nº of items per page */
      var newPerPage = parseInt(num_pag);

       if(init){      
      	/* destroy jPages and initiate plugin again */
	      $(id_pag + " ul.pagination").jPages({
	        containerID   : id_pag + " .list_results",
	        perPage       : newPerPage
	      });
      }else{      	
      	 /* destroy jPages and initiate plugin again */

      	 $(id_pag + " ul.pagination").jPages("destroy").jPages({
	        containerID   : id_pag + " .list_results",
	        perPage       : newPerPage
	      });
        }      
    }
    
    //START THE SEARCH
	if($(".results").length){
		if($("#activities").length){
			activityResults(); //run activities!	
	    } 		
		if($("#flights").length){
			flightResults(); //run flights!			
		}			
		if($("#rental-cars").length){
			rentalcarResults(); //run cars!
		}		
		if($("#tickets").length){
			ticketResults(); //run tickets!			
	    } 		
		if($("#hotels").length){
			hotelResults(); //run hotels!
	    }		
		if($("#restaurants").length){
			restaurantResults(); //run restaurants!
	    } 		
	}

	//Creating fixed panels
	/*if($("#results").length && $(window).width() > 991){		
		var max_height;
		var altura;

		$( "#customized-tour .nav-tabs li" ).click(function() {
			 var num_tab = $(this).prevAll().length;
			 altura = $("section.tab-pane").eq(num_tab).find(".results").height() + 135;
			 alert(altura);		
		});

		$(window).scroll(function() {
			init_height = $("#header").height() + $(".bg-container").height();
			max_height = $(".results").height() - 215;

			altura = $(".results").height() + 135;				
     		$(".col-filter").css("height", altura);

     		console.log($(window).scrollTop() +" / " + max_height)

			if($(window).scrollTop() > init_height){
		   		$(".panel-fix-top").addClass("active");
		   		$(".btn-up").fadeIn();
		   }else{
		   		$(".panel-fix-top").removeClass("active");
		   		$(".btn-up").fadeOut();
		   }
		   if($(window).scrollTop() >= max_height){
		   		$(".panel-fix-top").addClass("limit-height");
		   }else{
		   		$(".panel-fix-top").removeClass("limit-height");
		   }
		});
	}*/

	//SET RESULTS
	function setResults(){
		var num_results = $(".mod-result").length;
		$("h1.title span").text(num_results);
		$(".breadcrumb span").text(num_results);
	}

	//ORDER BY

	//price
	$( ".price-desc" ).click(function() {
		var num_pag = $(this).closest("section").find(".items-field-01").val();
		var id_pag = "#" + $(this).closest("section").attr("id");		
		$(this).closest("section").find('.mod-result').tsort('li.price',{order:'desc', attr:'data-value'});
		paginarFanontour(num_pag, id_pag, 0);			
	});

	$( ".price-asc" ).click(function() {
		var num_pag = $(this).closest("section").find(".items-field-01").val();
		var id_pag = "#" + $(this).closest("section").attr("id");		
		$('.mod-result').tsort('li.price',{order:'asc', attr:'data-value'});
		paginarFanontour(num_pag, id_pag, 0);		
	});

	$( ".duration-desc" ).click(function() {
		var num_pag = $(this).closest("section").find(".items-field-01").val();
		var id_pag = "#" + $(this).closest("section").attr("id");		
		$('.mod-result').tsort('li.duration',{order:'desc', attr:'data-value'});
		paginarFanontour(num_pag, id_pag, 0);			
	});

	$( ".duration-asc" ).click(function() {	
		var num_pag = $(this).closest("section").find(".items-field-01").val();
		var id_pag = "#" + $(this).closest("section").attr("id");	
		$('.mod-result').tsort('li.duration',{order:'asc', attr:'data-value'});
		paginarFanontour(num_pag, id_pag, 0);		
	});

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

	/* on select change */
    $(".dropdown-items .dropdown-menu").delegate("a","click",function(){
     	var num_pag = $(this).text();
     	var id_pag = "#" + $(this).closest("section").attr("id"); 
     	paginarFanontour(num_pag, id_pag, 0);     	
    });

    /* more offers */
    $(".results").on("click",".more-offers",function(e){
       	$(this).closest(".mod-result").find("table").toggle(); 
       	e.preventDefault(); 
     	 	
    });

    $(".results").on("click",".btn-hide",function(e){    	
     	$(this).closest(".mod-result").find("table").toggle(); 
     	e.preventDefault();   	
    });
});
