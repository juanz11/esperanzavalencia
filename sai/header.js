
$(document).ready(function(){
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('header3').addClass('header2');
		} else {
			$('header3').removeClass('header2');
		}
	});
 
});