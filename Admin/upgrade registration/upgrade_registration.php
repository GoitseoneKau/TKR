<?php
if(!empty($_POST)){
	
	$n=$_POST['name'];
	$s=$_POST['surname'];
	$gen=$_POST['gender'];
	$id=$_POST['ID'];
	$dob=$_POST['DOB'];
	$cont=$_POST['contact'];
	$p_name=$_POST['p_name'];
	$p_sname=$_POST['p_sname'];
	$p_num=$_POST['p_num'];
	$subjects = $_POST['sub'];
	$s_c=$_POST['s_check'];//bool
	$g_c = $_POST['g_check'];//bool
	
	$errors =array();
	$correct = array();
	
	//student name
	if(empty($n)){$errors["nameErr"]="<span class='form-error'>Please fill in name(s)!</span>";}
	else{$correct["name"]=ucwords(strtolower($n));}
	
	//student surname
	if(empty($s)){$errors["surnameErr"]="<span class='form-error'>Please fill in surname!</span>";}
	else{$correct["surname"]=ucwords(strtolower($s));}
	
	//student surname
	if(empty($subjects)){$errors["subjectErr"]="<span class='form-error'>Please check on one subject!</span>";}
	else{$correct["subject"]=$subjects;}
	
	//parent name
	if(empty($p_name)){$errors["pnameErr"]="<span class='form-error'>Please fill in name(s)!</span>";}
	else{$correct["pname"]=ucwords(strtolower($p_name));}
	
	//parent surname
	if(empty($p_sname)){$errors["psurnameErr"]="<span class='form-error'>Please fill in surname!</span>";}
	else{$correct["psurname"]=ucwords(strtolower($p_sname));}
	
	//student id
	if(empty($id)|| !preg_match("/[0-9]{13}/",$id)){$errors["idErr"]="<span class='form-error'>Please fill in a valid identity!</span>";}
	else if(strlen($id)<13 || strlen($id)>13){
		$errors["idErr"]="<span class='form-error'>Please fill in an ID of 13 digits</span>";
	}
	else{$correct["id"]=$id;}
	
	//student date of birth
	if(empty($dob)){$errors["dobErr"]="<span class='form-error'>Please fill in your date of birth,e.g 01-01-2000</span>";}
	else if(!preg_match("/([0-3][0-9]-((0[1-9])|(1[1-2]))-[0-9]{4})/",strval(date("d-m-Y",strtotime($dob))))){
		$errors["dobErr"]="<span class='form-error'>Please fill in your date of birth in valid form,e.g 01-01-2000</span>";
	}
	else{$correct["dob"]=$dob;}
	
	//parent or guardian number
	if(empty($p_num)){$errors["guardian_numErr"]="<span class='form-error'>Please fill in your home telephone!</span>";}
	else if(preg_match("/^0(11|12|21|31|41|43|51)-\d{3}-\d{4}$/",$p_num)===false || preg_match("/^0((60-[3-9]|64-[0-5]|66-[0-5])\d{2}-\d{4}|(7[1-4689]|6[1-3]|8[1-4])-\d{3}-\d{4})$/",$p_num)===false){
			$errors["guardian_numErr"]="<span class='form-error'>Please fill in a correct telephone number format  e.g 012-345-6789 or 072-123-4567 or write not applicable this way, N/A </span>";
	}
	else{$correct["parent_number"]=$p_num;}
	
	//student contact number
	if(empty($cont)){$errors["phone_noErr"]="<span class='form-error'>Please fill in your phone number!</span>";}
	else if(!preg_match("/^0((60-[3-9]|64-[0-5]|66-[0-5])\d{2}-\d{4}|(7[1-4689]|6[1-3]|8[1-4])-\d{3}-\d{4})$/",$cont)){
		$errors["phone_noErr"]="<span class='form-error'>Please fill in correct phone number e.g 072-123-4567!</span>";
	}
	else{$correct["phone_number"]=$cont;}
	
	//student agreement
	if($s_c==false){$errors["s_checkErr"]="<span class='form-error'>Please check on the student agreement to proceed!</span>";}
	else{$correct["s_check"]="agreed";}
	
	//guardian agreement
	if($g_c==false){$errors["g_checkErr"]="<span class='form-error'>Please check on the parent/guardian agreement to proceed!</span>";}
	else{$correct["g_check"]="agreed";}
	
	putenv("upload_tmp_dir=../");
	
	//id photo upload
	if(empty($_FILES["id_photo"])){
		$errors["id_photoErr"]="<span class='form-error'>please upload your id photo </span>";
	}
	else if(!preg_match("/(jpeg|jpg|png)/",strtolower(pathinfo($_FILES["id_photo"]["name"],PATHINFO_EXTENSION)))){
		$errors["id_photoErr"]="<span class='form-error'>we allow jpeg,jpg,png only!</span>";
	}else{
		$dir = "../images/id/";
		
		$new_name=$dir.$correct["id"]."-ID_Photo-".basename($_FILES["id_photo"]["name"]);
		
		move_uploaded_file($_FILES["id_photo"]["tmp_name"],$new_name);
		
		$correct["id_photo"]="THUTO KEYA RONA PROJECTS/".$new_name;
	}
	
	if(empty($_FILES["results"]["name"])){
		$errors["resultsErr"]="<span class='form-error'>please upload your previous certified results!</span>";
	}
	else if(!preg_match("/(jpeg|jpg|png)/",strtolower(pathinfo($_FILES["results"]["name"],PATHINFO_EXTENSION)))){
		$errors["resultsErr"]="<span class='form-error'>we allow jpeg,jpg,png only!</span>";
	}else{
		$dir = "../images/results/";
	
		$new_name=$dir.$correct["id"]."-Previous_Results-".basename($_FILES["results"]["name"]);
		
		move_uploaded_file($_FILES["results"]["tmp_name"],$new_name);
		
		$correct["previous_results"]="THUTO KEYA RONA PROJECTS/".$new_name;
	}
	
	if(empty($_FILES["id_copy"]["name"])){$errors["id_copyErr"]="<span class='form-error'>Please upload a certified ID copy!</span>";}
	else if(!preg_match("/(jpeg|jpg|png)/",strtolower(pathinfo($_FILES["id_copy"]["name"],PATHINFO_EXTENSION)))){
		$errors["id_copyErr"]="<span class='form-error'>we allow jpeg,jpg,png only!</span>";
	}else{
		$dir = "../images/id_copy/";
		
		$new_name=$dir.$correct["id"]."-ID_Copy-".basename($_FILES["id_copy"]["name"]);
		
		move_uploaded_file($_FILES["id_copy"]["tmp_name"],$new_name);
		
		$correct["id_copy"]="THUTO KEYA RONA PROJECTS/".$new_name;
	}
	
	if(!empty($errors)){
		print json_encode($errors);
	}else{
		$con=mysqli_connect("localhost","root","","tkr_db");
		
		$sql="INSERT INTO ". 
		"tkr_db.matric_upgrade(".
		"surname,fullnames,DOB,".
		"Gender,ID,Contact_Number,".
		"Guardian_Surname,Guardian_Name,Guardian_Contact_Number,".
		"Modules,Student_Declaration,Parent_Declaration,id_photo,previous_result,certified_id,status)".
		"VALUES('".
		$correct["surname"]."','".
		$correct["name"]."',DATE('".
		$correct["dob"]."'),'".
		$gen."','".
		$correct["id"]."','".
		$correct["phone_number"]."','".
		$correct["psurname"]."','".
		$correct["pname"]."','".
		$correct["parent_number"]."','".
		$correct["subject"]."','".
		$correct["s_check"]."','".
		$correct["g_check"]."','".
		addslashes($correct["id_photo"])."','".
		addslashes($correct["previous_results"])."','".
		addslashes($correct["id_copy"])."',".
		"'registered');";
		 
		 mysqli_query($con,$sql) or die(mysqli_error($con));
		 mysqli_close($con);
		 
		 print '{"home":"index.html"}';
		
	}
	
}



?>