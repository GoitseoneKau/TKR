
$(document).ready(function(){
	
	let box = $('#page').html();


	
			$.ajax({
				type:"POST",
				url: "js/file2html.php",
				cache:false,
				data:{file:box},
				dataType:"text",
				success: function(data){
					$(this).removeClass('text-primary');
					$(this).addClass('text-danger');
					$('#link').attr('href',data);
				}
			});
	

});