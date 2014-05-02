/**
 * 
 */

$( document ).ready(function() {

	$("img").each(function() {  
		imgsrc = $(this).attr("src");
		$(this).data("src",imgsrc);
		$(this).attr("src", "");
	});  
	
	$("img").unveil();
});