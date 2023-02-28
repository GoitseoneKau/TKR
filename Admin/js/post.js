$(document).ready(function(){
		let request_header="",
		request_value="",
		category ="",
		page="";

		
		//login
		$('#login').click(function(){
			page='login.php';
			$.post(page,$('#login_form').serialize(),function(data){
				if(data.result==true){
					$('#main').html(data);
				}
				else{
					$('#user_login').after(data.user_error);
					$('#password_login').after(data.password_error);
				}
			});
			
		});
		
		
		//registered
		//afternoon class
		$('#reg_ac').click(function(){
			page="student%20outputs/Registered.php";
			category ="ac";
			$('.panel-body').load(page,{request:'ac'});
			$('.panel-heading').html('Afternoon Class Students');
			$('#form').load('afternoon%20class%20registration/class_registration_form.php');
			$('button#next.btn.btn-primary').hide();
			$('button#next2.btn.btn-primary').hide();
			$('button#next3.btn.btn-primary').hide();
			$('button#saveClass.btn.btn-warning').show();	
			$('button#saveUpgrade.btn.btn-warning').hide();
			$('button#saveSkills.btn.btn-warning').hide();
			$('#scriptClass').remove();
			$('#script1').after('<script id="scriptClass" src="js/class_form_post.js" ></script>');
			
		});
		//matric upgrade
		$('#reg_mu').click(function(){
			page='student%20outputs/Registered.php';
			$('.panel-body').load(page,{request:'mu'});
			$('.panel-heading').html('Matric Upgrade');
			$('#form').load('upgrade%20registration/matric_upgrade_form.php');
			$('button#next.btn.btn-primary').hide();
			$('button#next2.btn.btn-primary').hide();
			$('button#next3.btn.btn-primary').hide();
			$('button#saveClass.btn.btn-warning').hide();	
			$('button#saveUpgrade.btn.btn-warning').show();
			$('button#saveSkills.btn.btn-warning').hide();
			category ="mu";
			$('#scriptClass').remove();
			$('#script1').after('<script id="scriptClass" src="js/matric_upgrade_post.js" ></script>');
		});
		//skill application
		$('#reg_sa').click(function(){
			page='student%20outputs/Registered.php';
			$('.panel-body').load(page,{request:'sa'});
			$('.panel-heading').html('Skill Application');
			$('#form').load('skills%20registration/skills%20form.php');
			$('button#next.btn.btn-primary').show();
			$('button#next2.btn.btn-primary').hide();
			$('button#next3.btn.btn-primary').hide();
			$('button#saveClass.btn.btn-warning').hide();	
			$('button#saveUpgrade.btn.btn-warning').hide();
			$('button#saveSkills.btn.btn-warning').hide();
			category ="sa";
			$('#scriptClass').remove();
			$('#script1').after('<script id="scriptClass" src="js/skills_form_post.js" ></script>');

		});



		
		//new students
		//afternoon class
		$('#new_ac').click(function(){
			page= 'student%20outputs/new.php';
			$('.panel-body').load(page,{request:'ac'});
            $('.panel-heading').html('Afternoon Class Students');
			category ="ac";
		});
		//matric upgrade
		$('#new_mu').click(function(){
			page = 'student%20outputs/new.php';
			$('.panel-body').load(page,{request:'mu'});
            $('.panel-heading').html('Matric Upgrade');
			category ="mu";
		});
		//skill application
		$('#new_sa').click(function(){
			page='student%20outputs/new.php';
			$('.panel-body').load(page,{request:'sa'});
            $('.panel-heading').html('Skill Application');
			category ="sa";
		});
		
		
		//payments
		//afternoon class
		$('#pay_ac').click(function(){
			page ='functions/pay.php';
			$('.panel-body').load(page,{request:'ac'});
            $('.panel-heading').html('Afternoon Class Students');
			category ="ac"

		});
		//matric upgrade
		$('#pay_mu').click(function(){
			page ='functions/pay.php';
			$('.panel-body').load(page,{request:'mu'});
             $('.panel-heading').html('Matric Upgrade');
			category ="mu";
		});
		//skill application
		$('#pay_sa').click(function(){
			page ='functions/pay.php';
			$('.panel-body').load(page,{request:'sa'});
             $('.panel-heading').html('Skill Application');
			category ="sa";
		});
		

			
        
});
	