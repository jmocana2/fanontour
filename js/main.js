$( document ).ready(function() { //DOM OK!
  	
  	//Lazy load
  	$(function() {
	    $("img.lazy").lazyload({
	    	threshold : 200,
	    	effect : "fadeIn"
	    });
	});

	//backgrounds search box
	//=================================
	//CONFIG IMAGES
	//=================================
	$(function() {
		 var images = ['/fanontour/img/backgrounds/home/tickets_h_600px.jpg','/fanontour/img/backgrounds/home/hotels_h_600px.jpg', '/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg','/fanontour/img/backgrounds/home/recorte_h_600px.jpg'];
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
		  	
		  	var num_sec = $(this).parent().prevAll().length;		  
		  	$("#bg-container").css("background","url('"+ images[num_sec] +"')no-repeat 0 0");
		  	$("#bg-container").css("background-size","contain");
		});
	});
});