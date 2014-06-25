/**
 * 
 */

$( document ).ready(function() {
	
	$("img").each(function() {  
		var imgsrc = $(this).attr("src");
		$(this).attr("data-src",imgsrc);
		$(this).attr("src", "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");
	});  
	
	if(lazyload.threshold == 0){
		$("img").unveil();
	} else {
		$("img").unveil(lazyload.threshold+"px");
	}
	
});