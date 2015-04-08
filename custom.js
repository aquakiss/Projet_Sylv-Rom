jQuery(document).ready(function()
{
	jQuery('#atooz').click(function(e) {
		e.preventDefault();
		jQuery('#atooz').css('background-color', 'white');
		jQuery('#todomaine').css('background-color', '#CBD3C3');
		
		jQuery.ajax({
			url: "Php/AaZ.php",
		}).done(function(result)
		{
	    	jQuery("#divEntre").html(result);
		});
	});

	jQuery('#todomaine').click(function( event ) {
		event.preventDefault();
		jQuery('#todomaine').css('background-color', 'white');
		jQuery('#atooz').css('background-color', '#CBD3D3');
		
		jQuery.ajax({
			url: "Php/ParDomaine.php",
			}).done(function(result){
	        	jQuery("#divEntre").html(result);
 			});
		});


	//regarde dans le body si on click sur l'element
	jQuery('body').on('click', '.dropdownCategori a', function(e) {
		e.preventDefault();
		var urlToCall = jQuery(this).attr("href");
		
		jQuery.ajax({
			url: urlToCall,
		}).done(function(result)
		{
	    	jQuery(".div-right").html(result);
		}); 
	});
});
