/**
 * 
 */

$( document ).ready(function() {

	 $('#menuToggler').on('click', function(e){
         e.preventDefault;
         $('#navigation ul.menu').toggleClass('menuIsActive');
         $('#menuToggler span.icon').toggleClass('navbutton_active');
     });
});