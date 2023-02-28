<?php
session_start();

if(!empty($_POST)){
	
	$n=$_POST['name'];
	$s=$_POST['surname'];
	$ini=$_POST['initials'];
	$title=$_POST['title'];
	$work_stat=$_POST['working'];//bool
	$comp = isset($_POST['company'])? $_POST['company']:"none";
	$y_work=isset($_POST['years_working'])? intval($_POST['years_working']):0;
	$occu = isset($_POST['occupation'])? $_POST['occupation']:"none";
	$hgp = intval($_POST['hgp']);
	$qual = $_POST['qualification'];
	$id=$_POST['ID'];
	$dob =$_POST['DOB'];
	$gender = $_POST['gender'];
	$mar_stat=$_POST['marital_status'];
	$res_add=$_POST['residential_address'];
	$res_code=$_POST['res_code'];
	$post_add= $_POST['postal_address'];
	$post_code= $_POST['postal_code'];
	$corres = $_POST['correspondence'];
	$home_tel=$_POST['home_telephone'];
	$work_tel=isset($_POST['work_telephone'])?$_POST['work_telephone']:"N/A";
	$phone_no=$_POST['phone_number'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	
	$errors = array();
	$correct = array();
	
	//name
	if(empty($n)){$errors["nameErr"]="<span class='form-error-phase1'>Please fill in name(s)!</span>";}
	else{$correct["name"]=ucwords(strtolower($n));}
	
	//surname
	if(empty($s)){$errors["surnameErr"]="<span class='form-error-phase1'>Please fill in surname!</span>";}
	else{$correct["surname"]=ucwords(strtolower($s));}
	
	//student initials
	if(empty($ini)||!stripos($ini,".") ){$errors["initialErr"]="<span class='form-error-phase1'>Please fill in your initials and in the correct way e.g A.M or a.m!</span>";}
	else{$correct["initials"]=strtoupper($ini);}
	
	//student title
	if(empty($title)){$errors["titleErr"]="<span class='form-error-phase1'>Please fill in your title!</span>";}
	else{$correct["title"]=$title;}
	
	//work status validation
	if($work_stat=="yes"){
		
		//company validation
		if(empty($comp))
		{$errors["companyErr"]="<span class='form-error-phase1'>Please fill in the company you worked from or work in!</span>";}
		else{$correct["company"]=$comp;$correct["work_status"]="working";}
		
		//years working
		if(empty($y_work)||!is_int($y_work)){$errors["years_workingErr"]="<span class='form-error-phase1'>Please fill in your years worked in valid form e.g 5!</span>";}
		else{$correct["years_working"]=$y_work;}
		
		//occupation
		if(empty($occu)){$errors["occupationErr"]="<span class='form-error-phase1'>Please fill in your occupation!</span>";}
		else{$correct["occupation"]=$occu;}
		
		//work telephone
		if(empty($work_tel)){$errors["work_telErr"]="<span class='form-error-phase1'>Please fill in your work telephone or N/A if not available!</span>";}
		else if(!preg_match_all("/^0((1(1|2)|21|31|4(1|3)|51)-\d{3}-\d{4})$/",$work_tel)){
			$errors["work_telErr"]="<span class='form-error-phase1'>Please fill in a correct telephone number format  e.g 012-345-6789 or write not applicable this way, N/A </span>";
		}
		else{$correct["work_telephone"]=$work_tel;}
	}else{
		//default values
		$correct["work_status"] = "Not working";
		$correct["years_working"]=$y_work;
		$correct["company"]=$comp;
		$correct["occupation"]=$occu;
		$correct["work_telephone"]=$work_tel;
		
	}
	
	//higher grade passed
	if(empty($hgp)||!preg_match("/[0-9]+/",$hgp)){$errors["higher_grade_passedErr"]="<span class='form-error-phase1'>Please fill in a valid grade!</span>";}
	else{$correct["higher_grade_passed"]=$hgp;}
	
	//qualification
	if(empty($qual)){$errors["qualificationErr"]="<span class='form-error-phase1'>Please fill in your qualification!</span>";}
	else{$correct["qualification"]=$qual;}
	
	//identity number
	if(empty($id)|| !preg_match("/[0-9]{13}/",$id)){$errors["idErr"]="<span class='form-error-phase1'>Please fill in a valid identity!</span>";}
	else if(strlen($id)<13 || strlen($id)>13){
		$errors["idErr"]="<span class='form-error-phase1'>Please fill in an ID of 13 digits</span>";
	}
	else{$correct["id"]=$id;}
	
	//date of birth
	if(empty($dob)){$errors["dobErr"]="<span class='form-error-phase1'>Please fill in your date of birth,e.g 01-01-2000</span>";}
	else if(!preg_match("/([0-3][0-9]-((0[1-9])|(1[1-2]))-[0-9]{4})/",strval(date("d-m-Y",strtotime($dob))))){
		$errors["dobErr"]="<span class='form-error-phase1'>Please fill in your date of birth in valid form,e.g 01-01-2000</span>";
	}
	else{$correct["dob"]=$dob;}
	
	$correct["gender"]=$gender;
	
	$correct["marital_status"]=$mar_stat;
	
	//residential address
	if(empty($res_add)){$errors["res_addErr"]="<span class='form-error-phase1'>Please fill in your residential address</span>";}
	else{$correct["residential_address"]=$res_add;}
	
	//residential code
	if(empty($res_code)||!preg_match("/[0-9]{4}/",$res_code)){$errors["res_codeErr"]="<span class='form-error-phase1'>Please fill in a valid residential code</span>";}
	else{$correct["residential_code"]=$res_code;}
	
	//postal address
	if(empty($post_add)){$errors["post_addErr"]="<span class='form-error-phase1'>Please fill in your postal address</span>";}
	else{$correct["postal_address"]=$post_add;}
	
	//postal code
	if(empty($post_code)||!preg_match("/[0-9]{4}/",$post_code)){$errors["post_codeErr"]="<span class='form-error-phase1'>Please fill in a valid postal code</span>";}
	else{$correct["postal_code"]=$post_code;}
	
	//correspondence validation
	if(empty($corres)){$errors["correspondenceErr"]="<span class='form-error-phase1'>Please choose your correspondence!</span>";}
	else{$correct["correspondence"]=$corres;}
	
	//home telephone validation
	if(empty($home_tel)){$errors["home_telErr"]="<span class='form-error-phase1'>Please fill in your home telephone!</span>";}
	else if(preg_match("/^0(11|12|21|31|41|43|51)-\d{3}-\d{4}$/",$home_tel)===false || preg_match("/^0((60-[3-9]|64-[0-5]|66-[0-5])\d{2}-\d{4}|(7[1-4689]|6[1-3]|8[1-4])-\d{3}-\d{4})$/",$home_tel)===false){
		$errors["home_telErr"]="<span class='form-error-phase1'>Please fill in a correct home telephone/cellphone number format  e.g 012-345-6789 or 072-123-4567 </span>";
	}else{$correct["home_telephone"]=$home_tel;}
	
	
	
	//phone number validation
	if(empty($phone_no)){$errors["phone_noErr"]="<span class='form-error-phase1'>Please fill in your phone number!</span>";}
	else if(!preg_match("/^0((60-[3-9]|64-[0-5]|66-[0-5])\d{2}-\d{4}|(7[1-4689]|6[1-3]|8[1-4])-\d{3}-\d{4})$/",$phone_no)){
		$errors["phone_noErr"]="<span class='form-error-phase1'>Please fill in correct phone number e.g 072-123-4567!</span>";
	}
	else{$correct["phone_number"]=$phone_no;}
	
	//fax validation
	if($fax=="N/A"){
		$correct["fax"]=$fax;
	}else{
		if(empty($fax)||!$fax=="N/A"){$errors["faxErr"]="<span class='form-error-phase1'>Please fill in your fax number or N/A if not available</span>";}
		else if(!preg_match("/^0((1(1|2)|21|31|4(1|3)|51)-\d{3}-\d{4})$/",$fax)){
				$errors["faxErr"]="<span class='form-error-phase1'>Please fill in a correct fax number format  e.g 012-345-6789 or write not applicable this way, N/A </span>";
		}
		else{$correct["fax"]=$fax;}
	}
	
	//email validation
	if(empty($email)){$errors["emailErr"]="<span class='form-error-phase1'>Please fill in your email!</span>";}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors["emailErr"]="<span class='form-error-phase1'>Please fill in a valid email!</span>";
	}
	else{$correct["email"]=$email;}
	
	if(!empty($errors)){
		$errors["status"] = false;
		print json_encode($errors);
	}else{
		//insert into database correct information
		$con = mysqli_connect("localhost","root","","tkr_db");

		$sql = "INSERT INTO skill_application(Surname,Fullnames,Initials,Title,".
		"Working,Company_Working,Years_Working,Company_Occupation,".
		"Highest_Grade_Passed,Qualification,ID,DOB,Gender,".
		"Marital_Status,Residential_Address,Res_Code,Postal_Address,".
		"Postal_Code,Correspondence_Address,Home_Telephone,".
		"Work_Telephone,Phone_Number,Fax_Number,Email) ".
		"VALUES('".
		mysqli_real_escape_string($con,$correct["surname"])."','".
		mysqli_real_escape_string($con,$correct["name"])."','".
		mysqli_real_escape_string($con,$correct["initials"])."','".
		mysqli_real_escape_string($con,$correct["title"])."','".
		$correct["work_status"]."','".
		mysqli_real_escape_string($con,$correct["company"])."',".
		mysqli_real_escape_string($con,$correct["years_working"]).",'".
		mysqli_real_escape_string($con,$correct["occupation"])."',".
		mysqli_real_escape_string($con,$correct["higher_grade_passed"]).",'".
		mysqli_real_escape_string($con,$correct["qualification"])."','".
		$correct["id"]."',DATE('".
		$correct["dob"]."'),'".
		$correct["gender"]."','".
		$correct["marital_status"]."','".
		mysqli_real_escape_string($con,$correct["residential_address"])."','".
		$correct["residential_code"]."','".
		mysqli_real_escape_string($con,$correct["postal_address"])."','".
		$correct["postal_code"]."','".
		mysqli_real_escape_string($con,$correct["correspondence"])."','".
		$correct["home_telephone"]."','".
		$correct["work_telephone"]."','".
		$correct["phone_number"]."','".
		$correct["fax"]."','".
		$correct["email"]."');";
		
		$_SESSION["ID"]=$correct["id"];
		
		mysqli_query($con,$sql) or die(mysqli_error($con));
		mysqli_close($con);
		
		print '{"status":true}';
	}

}

?>