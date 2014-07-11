/**
 * Here are Effects for Links
 */
$( document ).ready(function() {
	// Effect: Grow
	$(".grow img").each(function(item){
	     $(this).data("orginal-width",$(this).width()); 
	});
	$(".grow").each(function(item){
	     $(this).data("orginal-fontsize",$(this).css("font-size")); 
	});
	
	$(".grow img").hover(
	    function(){ //mousein
	         $(this).width($(this).data("orginal-width") + $(this).data("orginal-width")/10);
	    }, function(){ //mouseout
	        $(this).width($(this).data("orginal-width")); 
	});
	$(".grow").hover(
	    function(){//mousein
	       var fontSize = parseInt($(this).data("orginal-fontsize"));
	        fontSize = fontSize + 4 + "px";
	        $(this).css({'font-size':fontSize}); 
	    }, function(){//mouseout
	        var fontSize = parseInt($(this).data("orginal-fontsize"));
	        fontSize = fontSize + "px";
	        $(this).css({'font-size':fontSize}); 
	});
	
});