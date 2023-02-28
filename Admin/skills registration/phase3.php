<?php
session_start();

if(!empty($_POST)){
	
	$n=$_POST['name'];
	$s=$_POST['surname'];
	$title=$_POST['title'];
	$occup=$_POST['occupation'];
	$id=$_POST['ID'];
	$rel=$_POST['relation'];
	$home_tel=$_POST['home_tel'];
	$work_no=$_POST['work_no'];
	$email=$_POST['email'];
	$cell =$_POST['cell'];
	
	$errors =array();
	$correct = array();
	
	//name validation
	if(empty($n)){$errors["nameErr"]="<span class='form-error-phase3 '>Please fill in name(s)!</span>";}
	else{$correct["name"]=ucwords(strtolower($n));}
	
	//surname validation
	if(empty($s)){$errors["surnameErr"]="<span class='form-error-phase3 '>Please fill in surname!</span>";}
	else{$correct["surname"]=ucwords(strtolower($s));}
	
	//relation validation
	if(empty($rel)){$errors["relateErr"]="<span class='form-error-phase3 '>Please fill in relation!</span>";}
	else{$correct["relation"]=$rel;}
	
	//title validation
	if(empty($title)){$errors["titleErr"]="<span class='form-error-phase3 '>Please fill in your title!</span>";}
	else{$correct["title"]=$title;}
	
	//occupation field validation
	if(empty($occup)){$errors["occupationErr"]="<span class='form-error-phase3 '>Please fill in your occupation!</span>";}
	else{$correct["occupation"]=$occup;}
	
	//home telephone validation
	if($home_tel=="N/A"){$correct["home_telephone"]=$home_tel;}
	else{
		if(empty($home_tel)){$errors["hometelErr"]="<span class='form-error-phase3 '>Please fill in your work telephone or N/A if not available!</span>";}
		else if(!preg_match_all("/[0-9]/",$home_tel)){
			$errors["hometelErr"]="<span class='form-error-phase3 '>Please fill in telephone in digits not letters!</span>";
		}
		else if(!preg_match("/^0((1(1|2)|21|31|4(1|3)|51)-\d{3}-\d{4})$/",$home_tel)){
				$errors["hometelErr"]="<span class='form-error-phase3 '>Please fill in a correct telephone number format  e.g 012-345-6789 </span>";
		}
		else{$correct["home_telephone"]=$home_tel;}
	}
	
	//work number validation
	if($work_no=="N/A"){$correct["work_telephone"]=$work_no;}
	else{
		if(empty($work_no)){$errors["worktelErr"]="<span class='form-error-phase3 '>Please fill in your work telephone or N/A if not available!</span>";}
		else if(!preg_match_all("/[0-9]/",$work_no)){$errors["worktelErr"]="<span class='form-error-phase3 '>Please fill in telephone numbers in digits not letters!</span>";}
		else if(!preg_match("/^0((1(1|2)|21|31|4(1|3)|51)-\d{3}-\d{4})$/",$work_no)){
				$errors["worktelErr"]="<span class='form-error-phase3 '>Please fill in a correct telephone number format  e.g 012-345-6789 or write not applicable this way, N/A </span>";
		}
		else{$correct["work_telephone"]=$work_no;}
	}
	
	//cell validation
	if(empty($cell)){$errors["cell_noErr"]="<span class='form-error-phase3 '>Please fill in your phone number!</span>";}
	else if(!preg_match("/^0((60-[3-9]|64-[0-5]|66-[0-5])\d{2}-\d{4}|(7[1-4689]|6[1-3]|8[1-4])-\d{3}-\d{4})$/",$cell)){
		$errors["cell_noErr"]="<span class='form-error-phase3 '>Please fill in correct phone number e.g 072-123-4567!</span>";
	}
	else{$correct["cell_number"]=$cell;}
	
	//identity number
	if(empty($id)|| !preg_match("/[0-9]{13}/",$id)){$errors["idErr"]="<span class='form-error-phase1'>Please fill in a valid identity!</span>";}
	else if(strlen($id)<13 || strlen($id)>13){
		$errors["idErr"]="<span class='form-error-phase1'>Please fill in an ID of 13 digits</span>";
	}
	else{$correct["id"]=$id;}
	
	//email validation
	if(empty($email)){$errors["emailErr"]="<span class='form-error-phase3 '>Please fill in your email!</span>";}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors["emailErr"]="<span class='form-error-phase3 '>Please fill in a valid email!</span>";
	}
	else{$correct["email"]=$email;}
	
	//output
	if(!empty($errors)){
		print json_encode($errors);
	}else{
		$initials = substr($correct["surname"],0,1).".".substr($correct["name"],0,1);
		
		$con = mysqli_connect("localhost","root","","tkr_db");
		
		$sql="UPDATE tkr_db.skill_application SET ".
		"`Guardian_Surname`='".mysqli_real_escape_string($con,$correct["surname"])."',".
		"`Guardian_Name`='".mysqli_real_escape_string($con,$correct["name"])."',".
		"`Guardian_Initials`='".$initials."',".
		"`Guardian_Title`='".mysqli_real_escape_string($con,$correct["title"])."',".
		"`Guardian_Occupation`='".mysqli_real_escape_string($con,$correct["occupation"])."',".
		"`Guardian_ID`='".mysqli_real_escape_string($con,$correct["id"])."',".
		"`Guardian_Relationship`='".mysqli_real_escape_string($con,$correct["relation"])."',".
		"`Guardian_Home_Telephone`='".mysqli_real_escape_string($con,$correct["home_telephone"])."',".
		"`Guardian_Work_Telephone`='".mysqli_real_escape_string($con,$correct["work_telephone"])."',".
		"`Guardian_Email`='".mysqli_real_escape_string($con,$correct["email"])."',".
		"`Guardian_Cellnumber`='".mysqli_real_escape_string($con,$correct["cell_number"])."'".
		"  WHERE `ID`='".$_SESSION["ID"]."';";
		
		mysqli_query($con,$sql)or die(mysqli_error($con));
		mysqli_close($con);
		
		print '{"status":true}';
	}

}


?>