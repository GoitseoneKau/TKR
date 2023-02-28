$(function(){
    
		$('button#search.btn.btn-primary').click(function(){
				
					request_value = $("input#search_text.form-control").val();
					console.log(request_value);
					request_header = $('select#selector option:selected').val();
					console.log(request_header);
					
					if(category="ac"){
						//afternoon class
						$('.panel-body').load(page,{request:category, request_header:request_header, request_value:request_value});
					}
					
					if(category="mu"){
						//matric upgrade
						$('.panel-body').load(page,{request:category, request_header:request_header, request_value:request_value});
					}
					
					if(category="sa"){
						//skill application
						$('.panel-body').load(page,{request:category, request_header:request_header, request_value:request_value});
					}
				
		});
		
});