/**
 * 
 */
$( document ).ready(function() {
	
	if(fancybox.all_images=="1"){
		$("img:not(.no_fancybox)").each(function(){//ignore no_fancybox)
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