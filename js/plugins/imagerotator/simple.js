/**
 * Simple Image rotator with not much options
 */
$( document ).ready(function() {
	if($(".simpleimagerotator").attr("data-transition_time")){
		simpleimagerotator.transition_time = $(".simpleimagerotator").data("transition_time");
	}
    var simpleimagerotator_number=0;
   $(".simpleimagerotator img").each(function(item){
        $(this).attr("data-number",simpleimagerotator_number);
        if(simpleimagerotator_number>0){$(this).hide(); }
        simpleimagerotator_number++; 
	}); 
    var simpleimagerotator_max_number=simpleimagerotator_number;
    simpleimagerotator_number=0;
    setInterval(function(){sir_rotate()},simpleimagerotator.transition_time);
    function sir_rotate(){
        var old_number=simpleimagerotator_number;
        if(simpleimagerotator_number==simpleimagerotator_max_number-1){simpleimagerotator_number=0;}
        else{simpleimagerotator_number++;}
        $(".simpleimagerotator img[data-number='"+old_number+"']").fadeOut(500,function(){
            $(".simpleimagerotator img[data-number='"+simpleimagerotator_number+"']").fadeIn(500);
        });
    }
    
});