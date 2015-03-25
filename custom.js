jQuery(document).ready(function()
{
	jQuery('#atooz').click(function(event) {
		event.preventDefault();
		jQuery('#atooz').css('background-color', '#CCCCFF');
		jQuery('#todomaine').css('background-color', '#ECF0F1');

		jQuery.ajax({			
			url: "Php/AaZ.php",
		}).done(function(result)
		{
	    	jQuery("#divEntreA").html(result);
		});
	});

	jQuery('#todomaine').click(function( event ) {
		event.preventDefault();
		jQuery('#todomaine').css('background-color', '#CCCCFF');
		jQuery('#atooz').css('background-color', '#ECF0F1');
		
		jQuery.ajax({
			url: "Php/ParDomaine.php",
			}).done(function(result){
	        	jQuery("#divEntreA").html(result);
 			});
		});
});
