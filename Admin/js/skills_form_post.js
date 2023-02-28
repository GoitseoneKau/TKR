$('form').ready(function(){
			$('#myModal').on('hidden.bs.modal',function(){
				$('form')[0].reset();
				if( $('#form').html()=="<h2 class='form-success'>Successful Data Entry</h2>"){
					$('#form').load('skills%20registration/skills%20form.php');
				}
			});
			
			$(".personalDet input[name=inlineRadioBOptions]").on("change",function(){
				if($("input[name=inlineRadioBOptions]:checked").val() =="no"){
					$(".work_tel_num").remove();
					$(".occupation").remove();
					$(".working_years").remove();
					$(".company_name").remove();
					
				}else{
					$('<div class="form-group company_name"><label class="control-label">If yes, the name of the company: </label><input type="text" class="form-control" id="company_name" name="companyName" placeholder="e.g: Microsoft"></div><div class="form-group working_years"><label class="control-label">No: of Years working: </label><input type="text" class="form-control" id="working_years" name="workingYears" placeholder="e.g: 2 "></div><div class="form-group occupation"><label class="control-label">Occupation: </label><input type="text" class="form-control" id="occ" name="occupation" placeholder="e.g: Nurse"></div>')
					.after('.working');
					$('<div class="form-group work_tel_num">  <label class="control-label">Work Telphone Number: </label><input type="text" class="form-control" id="work_tel_num" name="workTelNum" placeholder="e.g: 012-123-7854 or N/A if not working"></div>')
					.after('.hometel');
				}
			});								
			
			//ajax personal details phase1
            $("button#next.btn.btn-primary").click(function(event){

					
					let name = $("#f_name1").val();
					let surname = $("#l_name1").val();
					let initials = $("#init1").val();
					let title = $("#Title1 option:selected").val();
				
					let working = $("#inlineRadioB1:checked").val();
					let company = $("#company_name").val();
					let years_working = $("#working_years").val();
					let occupation = $("#occ").val();
					let highest_grade_passed = $("#grade_passed").val();
					let qualification = $("#qualif option:selected").val();
			
					let ID = $("#Id").val();
					let DOB = $("#DOB").val();
					let gender = $("#inlineRadio1:checked").val();
					let marital_status = $("#marital_select option:selected").val();
					
					let residential_address = $("#res").val();
					let res_code = $("#res_code").val();
					let postal_address = $("#post_add").val();
					let post_code = $("#post_code").val();
					let correspondence = $("#correspondence_select option:selected").val();
					let home_telephone = $("#home_tel_num").val();
					let work_telephone = $("#work_tel_num").val();
					let phone_number = $("#phone_num").val();
					let fax = $("#fax_no").val();
					let email = $("#email1").val();
					
					if($("input[name=inlineRadioBOptions]:checked").val() =="no"){
						
						$.ajax({
							type:"POST",
							url: "skills%20registration/phase1.php",
							cache:false,
							data:{
								name:name,
								surname:surname,
								initials:initials,
								title:title,
								working:working,
								gender:gender,
								hgp:highest_grade_passed,
								qualification:qualification,
								ID :ID,
								DOB :DOB,
								marital_status:marital_status,
								residential_address:residential_address,
								res_code :res_code,
								postal_address : postal_address,
								postal_code :post_code,
								correspondence:correspondence,
								home_telephone:home_telephone,
								phone_number:phone_number,
								fax:fax,
								email:email
							},
							dataType:"json",
							success: function(data){
								//remove error class
								$("#f_name1,#l_name1,#init1,#Title1,#grade_passed,#qualif,#Id,#DOB,#marital_select,#res,#res_code,#post_add,#post_code,#correspondence_select,#home_tel_num,#work_tel_num,#phone_num,#fax_no,#email1")
								.removeClass("input-error");
								
								//remove instances of errors
								$(".form-error-phase1").remove();
								
								if(!data.nameErr =="") {
									$("#f_name1").addClass("input-error")
									.after(data.nameErr);
								}
								if(!data.surnameErr == "") {
									$("#l_name1").addClass("input-error")
									.after(data.surnameErr);
								}
								if(!data.initialErr == "") {
									$("#init1").addClass("input-error")
									.after(data.initialErr);
								}
								
								if(!data.titleErr=="") {
									$("#Title1").addClass("input-error")
									.after(data.titleErr);
								}
								
								
								if(!data.higher_grade_passedErr=="") {
									$("#grade_passed").addClass("input-error")
									.after(data.higher_grade_passedErr);
								}
								
								if(!data.qualificationErr=="") {
									$("#qualif").addClass("input-error")
									.after(data.qualificationErr);
								}
								
								if(!data.idErr==""){
									 $("#Id").addClass("input-error")
									 .after(data.idErr);
								}
								
								if(!data.dobErr==""){
									$("#DOB").addClass("input-error")
									.after(data.dobErr);
								}
								
								if(!data.res_addErr==""){
									$("#res").addClass("input-error")
									.after(data.res_addErr);
								}
								
								if(!data.res_codeErr==""){
									$("#res_code").addClass("input-error")
									.after(data.res_codeErr);
								}
								
								if(!data.post_addErr==""){
									$("#post_add").addClass("input-error")
									.after(data.post_addErr);
								}
								
								if(!data.post_codeErr==""){
									$("#post_code").addClass("input-error")
									.after(data.post_codeErr);
								}
								
								if(!data.correspondenceErr==""){
									$("#post_code").addClass("input-error")
									.after(data.correspondenceErr);
								}
								
								
								if(!data.home_telErr==""){
									$("#home_tel_num").addClass("input-error")
									.after(data.home_telErr);
								}
								
								
								if(!data.phone_noErr==""){
									$("#phone_num").addClass("input-error")
									.after(data.phone_noErr);
								}
								
								if(!data.faxErr==""){
									$("#fax_no").addClass("input-error")
									.after(data.faxErr);
								}
								
								if(!data.emailErr==""){
									$("#email1").addClass("input-error")
									.after(data.emailErr);
								}
								
								//code to go to next page
								if(data.status==true){
									$(".nextOfKinDet").show();
									$(".personalDet").hide();
									$('button#next.btn.btn-primary').hide();	
								}
								
							}
						});
						
					}else{
						$.ajax({
						type:"POST",
						url: "skills%20registration/phase1.php",
						cache:false,
						data:{
							name:name,
							surname:surname,
							initials:initials,
							title:title,
							working:working,
							company:company,
							gender:gender,
							years_working:years_working,
							occupation:occupation,
							hgp:highest_grade_passed,
							qualification:qualification,
							ID :ID,
							DOB :DOB,
							marital_status:marital_status,
							residential_address:residential_address,
							res_code :res_code,
							postal_address : postal_address,
							postal_code :post_code,
							correspondence:correspondence,
							home_telephone:home_telephone,
							work_telephone:work_telephone,
							phone_number:phone_number,
							fax:fax,
							email:email
						},
						dataType:"json",
						success: function(data){
							//remove error class
							$("#f_name1,#l_name1,#init1,#Title1,#company_name,#working_years,#occ,#grade_passed,#qualif,#Id,#DOB,#marital_select,#res,#res_code,#post_add,#post_code,#correspondence_select,#home_tel_num,#work_tel_num,#phone_num,#fax_no,#email1")
							.removeClass("input-error");
							
							//remove instances of errors
							$(".form-error-phase1").remove();
							
							if(!data.nameErr =="") {
								$("#f_name1").addClass("input-error")
								.after(data.nameErr);
							}
							if(!data.surnameErr == "") {
								$("#l_name1").addClass("input-error")
								.after(data.surnameErr);
							}
							if(!data.initialErr == "") {
								$("#init1").addClass("input-error")
								.after(data.initialErr);
							}
							
							if(!data.titleErr=="") {
								$("#Title1").addClass("input-error")
								.after(data.titleErr);
							}
							
							if(!data.companyErr=="") {
								$("#company_name").addClass("input-error")
								.after(data.companyErr);
							}
							if(!data.years_workingErr=="") {
								$("#working_years").addClass("input-error")
								.after(data.years_workingErr);
							}
							if(!data.occupationErr=="") {
								$("#occ").addClass("input-error")
								.after(data.occupationErr);
							}
							if(!data.higher_grade_passedErr=="") {
								$("#grade_passed").addClass("input-error")
								.after(data.higher_grade_passedErr);
							}
							
							if(!data.qualificationErr=="") {
								$("#qualif").addClass("input-error")
								.after(data.qualificationErr);
							}
							
							if(!data.idErr==""){
								 $("#Id").addClass("input-error")
								 .after(data.idErr);
							}
							
							if(!data.dobErr==""){
								$("#DOB").addClass("input-error")
								.after(data.dobErr);
							}
							
							if(!data.res_addErr==""){
								$("#res").addClass("input-error")
								.after(data.res_addErr);
							}
							
							if(!data.res_codeErr==""){
								$("#res_code").addClass("input-error")
								.after(data.res_codeErr);
							}
							
							if(!data.post_addErr==""){
								$("#post_add").addClass("input-error")
								.after(data.post_addErr);
							}
							
							if(!data.post_codeErr==""){
								$("#post_code").addClass("input-error")
								.after(data.post_codeErr);
							}
							
							if(!data.correspondenceErr==""){
								$("#post_code").addClass("input-error")
								.after(data.correspondenceErr);
							}
							
							
							if(!data.home_telErr==""){
								$("#home_tel_num").addClass("input-error")
								.after(data.home_telErr);
							}
							
							if(!data.work_telErr==""){
								$("#work_tel_num").addClass("input-error")
								.after(data.work_telErr);
							}
							
							if(!data.phone_noErr==""){
								$("#phone_num").addClass("input-error")
								.after(data.phone_noErr);
							}
							
							if(!data.faxErr==""){
								$("#fax_no").addClass("input-error")
								.after(data.faxErr);
							}
							
							if(!data.emailErr==""){
								$("#email1").addClass("input-error")
								.after(data.emailErr);
							}
							
							
								//code to go to next page
								if(data.status==true){
								
									$(".personalDet").hide();
									$(".nextOfKinDet").show();
									$('button#next.btn.btn-primary').hide();
									
								}
							
							
						}
					});
					}
					
					
			});
			
			
			//ajax nextofkin phase2
			$("button#next2.btn.btn-primary").click(
				function(event){
					event.preventDefault();
					let name = $("#k_fname").val();
					let surname = $("#k_lname").val();
					let initials = $("#k_init").val();
					let relation = $("#k_relate").val();
					let telephone = $("#k_Tel").val();
					let phone = $("#k_phoneNum").val();
					let email = $("#k_mail").val();
					let id = $("#k_ID").val();
					let address = $("#k_address").val();
					
					
					$.ajax({
						type:"POST",
						url: "Admin/skills%20registration/phase2.php",
						cache:false,
						data:{
						  name : name,
						  surname : surname,
						  ini : initials,
						  relation : relation,
						  telephone : telephone,
						  phone : phone,
						  ID : id,
						  email : email,
						  address:address
						},
						dataType:"json",
						success: function(data){
							//remove error class
							$("#k_fname,#k_lname,#k_init,#k_relate,#k_Tel,#k_phoneNum,#k_mail,#k_ID,#k_address")
							.removeClass("input-error");
							
							//remove instances of errors
							$(".form-error-phase2").remove();
							
							if(!data.nameErr =="") {
								$("#k_fname").addClass("input-error")
								.after(data.nameErr);
							}
							if(!data.surnameErr == "") {
								$("#k_lname").addClass("input-error")
								.after(data.surnameErr);
							}
							if(!data.initialErr == "") {
								$("#k_init").addClass("input-error")
								.after(data.initialErr);
							}
							
							if(!data.relationErr=="") {
								$("#k_relate").addClass("input-error")
								.after(data.relationErr);
							}
							if(!data.telephoneErr=="") {
								$("#k_Tel").addClass("input-error")
								.after(data.telephoneErr);
							}
							if(!data.phone_noErr=="") {
								$("#k_phoneNum").addClass("input-error")
								.after(data.phone_noErr);
							}
							
							if(!data.emailErr=="") {
								$("#k_mail").addClass("input-error")
								.after(data.emailErr);
							}
							if(!data.idErr=="") {
								$("#k_ID").addClass("input-error")
								.after(data.idErr);
							}
							if(!data.addressErr=="") {
								$("#k_address").addClass("input-error")
								.after(data.addressErr);
							}
							
							
							//code to go to next page
							if(data.status==true){
								$(".parentGuardianDet").show();
								$(".nextOfKinDet").hide();
								$('button#next2.btn.btn-primary').hide();
							}
							
						}
					});
					
				}
			);
			
			//ajax guardian phase3
			$("button#next3.btn.btn-primary").click(
				function(event){
				
					
					
					let name = $("#Fname2").val();
					let surname = $("#lname2").val();
					let title = $("#Title2 option:selected").val();
					let occupation = $("#occ1").val();
					let id = $("#ID1").val();
					let relation = $("#relate2 option:selected").val();
					let home_tel = $("#home_tel_num2").val();
					let work_num = $("#work_num2").val();
					let email = $("#email2").val();
					let cell = $("#cell_phone2").val();
					
					
					$.ajax({
						type:"POST",
						url: "Admin/skills%20registration/phase3.php",
						cache:false,
						data:{
						  name : name,
						  surname : surname,
						  title : title,
						  occupation : occupation,
						  ID : id,
						  relation : relation,
						  home_tel : home_tel,
						  work_no : work_num,
						  email : email,
						  cell : cell,
						},
						dataType:"json",
						success: function(data){
							//remove error class
							$("#Fname2,#lname2,#Title2,#occ1,#ID1,#relate2,#home_tel_num2,#work_num2,#email2,#cell_phone2")
							.removeClass("input-error");
							
							//remove instances of errors
							$(".form-error-phase3").remove();
							
							if(!data.nameErr =="") {
								$("#Fname2").addClass("input-error")
								.after(data.nameErr);
							}
							if(!data.surnameErr == "") {
								$("#lname2").addClass("input-error")
								.after(data.surnameErr);
							}
							if(!data.titleErr == "") {
								$("#Title2").addClass("input-error")
								.after(data.titleErr);
							}
							
							if(!data.occupationErr=="") {
								$("#occ1").addClass("input-error")
								.after(data.occupationErr);
							}
							if(!data.idErr=="") {
								$("#ID1").addClass("input-error")
								.after(data.idErr);
							}
							if(!data.relateErr=="") {
								$("#relate2").addClass("input-error")
								.after(data.relateErr);
							}
							if(!data.hometelErr=="") {
								$("#home_tel_num2").addClass("input-error")
								.after(data.hometelErr);
							}
							if(!data.worktelErr=="") {
								$("#work_num2").addClass("input-error")
								.after(data.worktelErr);
							}
							if(!data.emailErr=="") {
								$("#email2").addClass("input-error")
								.after(data.emailErr);
							}
							if(!data.cell_noErr=="") {
								$("#cell_phone2").addClass("input-error")
								.after(data.cell_noErr);
							}
							
							
							//code to go to next page
							if(data.status==true){
								$(".declaration").show();
								$(".parentGuardianDet").hide();
								$('button#next3.btn.btn-primary').hide();
								$('button#saveSkills.btn.btn-warning').show();
							}
							
							
						}
					});
					
				}
			);
			
			//ajax declaration for phase4
			$("button#saveSkills.btn.btn-primary").click(function(event){
					
					let guardian_check = $("#inlineCheckBox:checked").length;
					
					$.ajax({
						type:"POST",
						url: "Admin/skills%20registration/phase4.php",
						cache:false,
						data:{
						  check:guardian_check
						},
						dataType:"json",
						success: function(data){
							//remove error class
							$("#inlineCheckBox").removeClass("input-error");
							
							//remove instances of errors
							$(".form-error-phase4").remove();
							
							if(!data.checkErr==""){
								$("#inlineCheckBox").addClass("input-error")
								.after(data.checkErr);
							}else{
								setTimeout(()=>{
									$(".declaration").hide() 
									$('#form').html("<h2 class='form-success'>Successful Data Entry</h2>")}
								,5000);
								page='student%20outputs/Registered.php';
								$('.panel-body').load(page,{request:'sa'});
								$('.panel-heading').html('Skill Application');
								$('#form').load('skills%20registration/skills%20form.php');
							}
						}
					});
					
			});
			

              let select;
              select += '<option val ="0" disabled> Please select your age </option>';
              for( let i = 8; i <=35 ; i++){
                select +='<option value='+i+'>'+ i +'</option>';
                $('#some_select').html(select);
              }

});