/**
 * Get  class .youtube and embed youtube video
 * 
 * Usage:
 * <p class="youtube">https://www.youtube.com/watch?v=k4CDEhUE8YA</p>
 * or
 * <p class="youtube">url=https://www.youtube.com/watch?v=k4CDEhUE8YA;width=WWW;height=HHH</p>
 * 
 * Result:
 * <iframe width="560" height="315" src="//www.youtube.com/embed/k4CDEhUE8YA" frameborder="0" allowfullscreen></iframe>
 */
$( document ).ready(function() {
	$(".youtube").each(function() { 
		var content = $(this).html();
		var url = "";
		var newhtml="";
		if(content.indexOf(";") >= 0){ //overwrite
			var arr = content.split(";");
			var index=0;
			for (index = 0; index < arr.length; ++index) {
			    var el = arr[index].split("=");
			    switch(el[0]){
			    case "width":youtube.width=el[1];break;
			    case "height":youtube.height=el[1];break;
			    case "url": url = el[1];break;
			    }
			}
		} else { //default options
			url = content;
		}
		newhtml = "<iframe width=\""+youtube.width+"\" height=\""+youtube.height+"\" src=\"//www.youtube.com/embed/"+getYouTubeID(url)+"\" frameborder=\"0\" allowfullscreen></iframe>";
		$(this).html(newhtml);
		$(this).removeClass("youtube");
	});
});
function getYouTubeID(url){
	var id="";
	var all = url.split("?");
	if(all.lenght>2){
		var pars = all.split("&");
		var index=0;
		for (index = 0; index < pars.length; ++index) {
			var t = pars[index].split("=");
			if(t[0] == "v"){
				id=td[1];
				break;
			}
		}
	} else {
		id = all[1].split("=")[1];
	}
	return id;
}