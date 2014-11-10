$( document ).ready(function() { //DOM OK! 

	//RESULTS
	//
	//SLIDER FORM
	//=======================
	if($(".results").length){

		if($("#activities").length){
			//=========== ACTIVITIES =============
			//************* CONFIG ***************
			var min_duration = 0;
			var max_duration = 120;
			var min_price = 0;
			var max_price = 600;
			var itemsPage = 5;


			$('#activities #price-slider,#activities #duration-slider').slider()

			function filterActivities(v1min, v1max, v2min, v2max){

				$(".results ul").remove();
			  	var resultHtml = "<ul id='list_results'>";

			    $.get("/fanontour/xml/results/activity.xml", function (xml) {
				    $(xml).find("activity").each(function () {	

				       var val_price = parseInt($(this).find('price').text());
				       var val_duration = parseInt($(this).find('duration').text());
				       if(isNaN(val_duration)){
				       	val_duration = max_duration;
				       }
				      
				       if((val_price >= v1min && val_price <= v1max) && (val_duration >= v2min && val_duration <= v2max)){
				       	   var name = $(this).find('name').text();
		       			   var description = $(this).find('description').text();
		       			   var image = $(this).find('image').text();
		       			   var price = $(this).find('price').text(); 
		       			   var duration = $(this).find('duration').text();     			   
		       			   var source = $(this).find('source').text();
		       			   var url = $(this).find('url').text();
					       
					       resultHtml += "<li class='mod-result'><div class='mod-img'><img src="+ image +" alt=" + name +"></div>";
					       resultHtml += "<div class='mod-txt'><h2>"+ name +"</h2><p>"+ description +"</p></div>";
					       resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li class='duration' data-value='"+ val_duration +"'><span class='fanontour-icon icon-icons-fanontour_clock'></span> "+ duration +" <abbr title='approximately'> approx.</abbr></li><li><span class='fanontour-icon icon-icons-fanontour_source'></span> Found in <strong>"+ source +"</strong></li></div>";			
				       }			      
				    });

					resultHtml += "</ul>";
					$(".results").html(resultHtml).promise().done(function(){
	       				orderFanontour($("#sort-field-01").attr("data-value"));
	       				paginarFanontour($("#items-field-01").val()); 
	       				setResults();      				       				
	    			});
				});
			}

			//SLIDER
			$('#activities #price-slider, #activities #duration-slider').slider()
			  .on('slideStop', function(ev){

			  	//Get min-max values
			  	//Min max prices
			  	if($("#price-slider").val() == ""){
			  		var interval = min_price + "," + max_price;
			  	}else{
			  		var interval = $("#price-slider").val();
			  	}

			  	if($("#duration-slider").val() == ""){
			  		var interval2 = min_duration + "," +  max_duration;
			  	}else{
			  		var interval2 = $("#duration-slider").val();
			  	}
			    
			    var res = interval.split(",");
			    var v1min = res[0];
			    var v1max = res[1];
			    //Min max duration
			 
			    var res2 = interval2.split(",");
			    var v2min = res2[0];
			    var v2max = res2[1];

			    filterActivities(v1min, v1max, v2min, v2max)	  	
			});

			//PAGINATION
			/* initiate plugin */
		    $("ul.pagination").jPages({
		      containerID : "list_results",
		      perPage : itemsPage
		    });
	    }  
		//=========== / ACTIVITIES =============

		//============= FLIGHTS ================
		if($("#flights").length){
			//************* CONFIG ***************
			var min_price = 0;
			var max_price = 4000;
			var itemsPage = 10;

			$('#flights #price-slider').slider();

			function filterFlights(v1min, v1max){

				$(".results ul").remove();
			  	var resultHtml = "<ul id='list_results'>";

			    $.get("/fanontour/xml/results/flights.xml", function (xml) {
				    $(xml).find("flight").each(function () {	

				       var val_price = parseInt($(this).find('price').text());
				      			      
				       if(val_price >= v1min && val_price <= v1max){
				       	   var route = $(this).find('route').text();
		       			   var price = $(this).find('price').text(); 	       			     			   
		       			   var source = $(this).find('source').text();
		       			   var url = $(this).find('url').text();
					       
					       resultHtml += "<li class='mod-result panel panel-result'>";
					       resultHtml += "<div class='mod-txt'><h2>"+ route +"</h2></div>";
					       resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li><span class='fanontour-icon icon-icons-fanontour_source'></span> Found in <strong>"+ source +"</strong></li></div>";			
				       }			      
				    });

					resultHtml += "</ul>";
					$(".results").html(resultHtml).promise().done(function(){
	       				orderFanontour($("#sort-field-01").attr("data-value"));
	       				paginarFanontour($("#items-field-01").val()); 
	       				setResults();      				       				
	    			});
				});
			}

			//SLIDER
			$('#flights #price-slider').slider()
			  .on('slideStop', function(ev){

			  	//Get min-max values
			  	//Min max prices
			  	if($("#price-slider").val() == ""){
			  		var interval = min_price + "," + max_price;
			  	}else{
			  		var interval = $("#price-slider").val();
			  	}		  	
			    
			    var res = interval.split(",");
			    var v1min = res[0];
			    var v1max = res[1];		    

			    filterFlights(v1min, v1max);	  	
			});

			//PAGINATION
			/* initiate plugin */
		    $("ul.pagination").jPages({
		      containerID : "list_results",
		      perPage : itemsPage
		    });
		}
		//============= FLIGHTS ================
		//
		//=========== RENTAL CARS ==============
		if($("#rental-cars").length){
			//************* CONFIG ***************
			var min_price = 0;
			var max_price = 4000;
			var itemsPage = 10;

			$('#rental-cars #price-slider').slider();

			function filterCars(v1min, v1max){

				$(".results ul").remove();
			  	var resultHtml = "<ul id='list_results'>";

			    $.get("/fanontour/xml/results/cars.xml", function (xml) {
				    $(xml).find("car").each(function () {	

				       var val_price = parseInt($(this).find('price').text());
				      			      
				       if(val_price >= v1min && val_price <= v1max){
				       	   var name = $(this).find('name').text();
				       	   var image = $(this).find('image').text();
		       			   var price = $(this).find('price').text();
		       			   var doors = $(this).find('doors').text();  	       			     			   
		       			   var source = $(this).find('source').text();
		       			   var url = $(this).find('url').text();
					       
					       resultHtml += "<li class='mod-result'><div class='mod-img'><img src="+ image +" alt=" + name +"></div>";
					       resultHtml += "<div class='mod-txt'><h2>"+ name +"</h2><p>Pick up date: <strong>10/11/2014 (11:20)</strong> | Drop off date: <strong>12/11/2014 (11:20)</strong></p></div>";
					       resultHtml += "<div class='result-footer'><ul class='list-inline'><li class='price' data-value="+ price + ">" + price +" &euro;</li><li class='source'><a class='btn btn-search' href='"+ url +"'>Book here</a></li><li class='doors' data-value="+ doors + ">" + doors +" doors;</li><li><span class='fanontour-icon icon-icons-fanontour_source'></span> Found in <strong>"+ source +"</strong></li></div>";
				       }			      
				    });

					resultHtml += "</ul>";
					$(".results").html(resultHtml).promise().done(function(){
	       				orderFanontour($("#sort-field-01").attr("data-value"));
	       				paginarFanontour($("#items-field-01").val()); 
	       				setResults();      				       				
	    			});
				});
			}

			//SLIDER
			$('#rental-cars #price-slider').slider()
			  .on('slideStop', function(ev){

			  	//Get min-max values
			  	//Min max prices
			  	if($("#price-slider").val() == ""){
			  		var interval = min_price + "," + max_price;
			  	}else{
			  		var interval = $("#price-slider").val();
			  	}		  	
			    
			    var res = interval.split(",");
			    var v1min = res[0];
			    var v1max = res[1];		    

			    filterCars(v1min, v1max);	  	
			});

			//PAGINATION
			/* initiate plugin */
		    $("ul.pagination").jPages({
		      containerID : "list_results",
		      perPage : itemsPage
		    });
		}
		//============= FLIGHTS ================			

		

	    function paginarFanontour(num_pag){
	      /* get new nº of items per page */
	      var newPerPage = parseInt(num_pag);

	      /* destroy jPages and initiate plugin again */
	      $("ul.pagination").jPages("destroy").jPages({
	        containerID   : "list_results",
	        perPage       : newPerPage
	      });
	    }
		
	}
	
	//Creating fixed panels
	if($("#results").length && $(window).width() > 991){		
		$(window).scroll(function() {
			var init_height = $("#header").height() + $(".bg-container").height();
			var max_height = $(".results").height() - 215;

			var altura = $(".results").height() + 135;				
     		$(".col-filter").css("height", altura);

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
	}

	//SET RESULTS
	function setResults(){
		var num_results = $("#list_results .mod-result").length;
		$("h1.title span").text(num_results);
		$(".breadcrumb span").text(num_results);
	}

	//ORDER BY
	//price
	$( ".price-desc" ).click(function() {		
		$('.mod-result').tsort('li.price',{order:'desc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());			
	});

	$( ".price-asc" ).click(function() {		
		$('.mod-result').tsort('li.price',{order:'asc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());		
	});

	$( ".duration-desc" ).click(function() {		
		$('.mod-result').tsort('li.duration',{order:'desc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());			
	});

	$( ".duration-asc" ).click(function() {		
		$('.mod-result').tsort('li.duration',{order:'asc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());		
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

	//Creating fixed panels
	if($("#results").length && $(window).width() > 991){		
		$(window).scroll(function() {
			var init_height = $("#header").height() + $(".bg-container").height();
			var max_height = $(".results").height() - 215;

			var altura = $(".results").height() + 135;				
     		$(".col-filter").css("height", altura);

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
	}

	//SET RESULTS
	function setResults(){
		var num_results = $("#list_results .mod-result").length;
		$("h1.title span").text(num_results);
		$(".breadcrumb span").text(num_results);
	}

	//ORDER BY
	//price
	$( ".price-desc" ).click(function() {		
		$('.mod-result').tsort('li.price',{order:'desc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());			
	});

	$( ".price-asc" ).click(function() {		
		$('.mod-result').tsort('li.price',{order:'asc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());		
	});

	$( ".duration-desc" ).click(function() {		
		$('.mod-result').tsort('li.duration',{order:'desc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());			
	});

	$( ".duration-asc" ).click(function() {		
		$('.mod-result').tsort('li.duration',{order:'asc', attr:'data-value'});
		paginarFanontour($("#items-field-01").val());		
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
     	paginarFanontour(num_pag);     	
    });


});
