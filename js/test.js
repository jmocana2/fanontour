$( document ).ready(function() { //DOM OK! 
	//Customized tour
	$( ".btn-request" ).click(function(e) {		
		$.ajax({
		  type: "GET",
		  dataType: "xml",
		  url: "xml/results/tickets.xml"		  
		})
		.done(function(xml) {
		   xmlhttp=new XMLHttpRequest();
		   xmlDoc=xmlhttp.responseXML;
		   alert(xmlDoc);
		});
		e.preventDefault();
	});
});

