$(document).ready(function() {
	$('.has-animation').each(function(index) {
		$(this).delay($(this).data('delay')).queue(function(){
		  $(this).addClass('animate-in');
		});
	});
  
	$('.symbol').text('+');
  
	$('.collapse-head').click(function(){
		if($(this).children().text()=='+'){
			$(this).children().text('-');
			$(this).css({"background-color":"black","color":"white"});
		}
		else{
			$(this).children().text('+');
			$(this).css({"background-color":"inherit","color":"black"});
		}
	});
  
});