/**
 * 
 */
$( document ).ready(function() {
	
	if(fancybox.all_images=="1"){
		$("img:not(.no_fancybox)").each(function(){//ignore no_fancybox)
			if($(this).parent().is("a")){
				$(this).parent().addClass("fancybox");
			} else { //must add link
				var newlink = "<a href=\""+$(this).attr("src")+"\" class=\"fancybox\">"+$(this).clone().wrap('<p>').parent().html()+"</a>";
				$(this).replaceWith(newlink);
			}
			
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