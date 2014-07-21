/**
 * 
 */

$( document ).ready(function() {
	
	$(".simpleimagerotator img"){ //Ignore this container
		$(this).addClass("no_lazyload");
	}
	
	$("img:not(.no_lazyload)").each(function() {  
		var imgsrc = $(this).attr("src");
		$(this).attr("data-src",imgsrc);
		$(this).attr("src", "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");
	});  
	
	if(lazyload.threshold == 0){
		$("img:not(.no_lazyload)").unveil();
	} else {
		$("img:not(.no_lazyload)").unveil(lazyload.threshold+"px");
	}
	
});