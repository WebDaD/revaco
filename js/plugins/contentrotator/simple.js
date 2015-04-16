/**
 * Content rotator with not much options
 */
$( document ).ready(function() {
    if($(".contentrotator").attr("data-transition_time")){
        contentrotator.transition_time = $(".contentrotator").data("transition_time");
    }
    var contentrotator_number=0;
   $(".contentrotator .rotate").each(function(item){
        $(this).attr("data-number",contentrotator_number);
        if(contentrotator_number>0){$(this).hide(); }
        contentrotator_number++; 
    }); 
    var contentrotator_max_number=contentrotator_number;
    contentrotator_number=0;
    setInterval(function(){cr_rotate()},contentrotator.transition_time);
    function cr_rotate(){
        var old_number=contentrotator_number;
        if(contentrotator_number==contentrotator_max_number-1){contentrotator_number=0;}
        else{contentrotator_number++;}
        $(".contentrotator .rotate[data-number='"+old_number+"']").fadeOut(500,function(){
            $(".contentrotator .rotate[data-number='"+contentrotator_number+"']").fadeIn(500);
        });
    }
    
});