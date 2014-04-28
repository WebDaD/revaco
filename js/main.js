/**
 * 
 */

$( document ).ready(function() {

	 $('#menuToggler').on('click', function(e){
         e.preventDefault;
         $('#navigation ul.menu').toggleClass('menuIsActive');
     });
});