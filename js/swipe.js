/**
 * 
 */

$( document ).ready(function() {

	 $("#container").swipe( {
	        //Generic swipe handler for all directions
	        swipeRight:function(event, direction, distance, duration, fingerCount) {
	        	$('#navigation ul.menu').addClass('menuIsActive');  
	        },
	        swipeLeft:function(event, direction, distance, duration, fingerCount) {
	        	$('#navigation ul.menu').removeClass('menuIsActive');  
	        }
	      });
});