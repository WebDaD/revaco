/**
 * 
 */
$( document ).ready(function() {
	
	if(fancybox.all_images=="1"){
		$("img").each(function(){
			$(this).addClass("fancybox");
		});
	}
	
	$(".fancybox").fancybox({
		beforeShow : function() {
			var alt = this.element.find('img').attr('alt');
			
			this.inner.find('img').attr('alt', alt);
			
			this.title = alt;
		}
	});
});