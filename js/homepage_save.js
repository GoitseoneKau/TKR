$(document).ready(function(){
	
	let box = $('#page').html();

	$('#save').click(function(){
			$.ajax({
				type:"POST",
				url: "js/file2html.php",
				cache:false,
				data:{file:box},
				dataType:"text",
				success: function(data){
					$(this).removeClass('text-primary');
					$(this).addClass('text-danger');
				}
			});
	});
			
	function handler(event){
		let node_src = event.target.src;
		let node_id = event.target.id;
		console.log(node_src);
		
		$('#preview').css({'background-image':'url('+node_src+')','background-size':'cover','background-position':'center'});
		$('#el_name').html("image number "+node_id);
	}
	
	let inputs = $('.carousel-item');
	inputs.on('click',handler);

	$('input#image').change(function(){
		
		let new_img = $(this).prop('files')[0];
		let data = new FormData();
		data.append("image",new_img);
		
		$.ajax({
			type:"POST",
			url: "js/upload.php",
			cache:false,
			processData:false,
			contentType:false,
			enctype:"multipart/form-data",
			data:data,
			dataType:"json",
			success: function(data){
				
				for(let i=0;i<data.length-1;i++){
					if(i==0){
						$("#gallery>.carousel-indicators")
						.append('<li id="gal'+i+'" data-target="#gallery" data-slide-to="'+i+'" class="active"><img width="30%" height="10%"></li>');
					}else{
						$("#gallery>.carousel-indicators")
						.append('<li id="gal'+i+'" data-target="#gallery" data-slide-to="'+i+'"><img width="30%" height="10%"></li>');
					}
					
					$(".carousel-indicators>li#gal"+i)
					.css({
						"background":"url("+data[i]+")",
						'background-size':'cover',
						'background-position':'center',
						'height':'100px',
						'width':'4000px',
						"background-repeat":"no-repeat"
					});
				}
				
				for(let i=0;i<data.length-1;i++){
					if(i==0){
						$("#gallery>.carousel-inner")
						.append('<div class="carousel-item active"><img width="30%" height="10%" style="float:left;" class="img-thumbnail img-fluid" id="preview'+i+'"></div>');
					}else{
						$("#gallery>.carousel-inner")
						.append('<div class="carousel-item">'+
						'<img width="30%" height="10%" style="float:left;" '+
						'class="img-thumbnail img-fluid" id="preview'+i+'"></div>');
					}
					
					$(".carousel-item>img#preview"+i)
					.css({
						"background-image":"url("+data[i]+")",
						'background-size':'cover',
						'background-position':'center'
					});
				}
				
			}
		});
	});
});