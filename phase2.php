<?php
session_start();
if(!empty($_POST))
{
  
  $n=$_POST['name'];
  $s=$_POST['surname'];
  $ini=$_POST['ini'];
  $rel=$_POST['relation'];
  $tel=$_POST['telephone'];
  $phone=$_POST['phone'];
  $id=$_POST['ID'];
  $email=$_POST['email'];
  $add=$_POST['address'];
  $errors =array();
	$correct = array();
	
	if(empty($n)){$errors["nameErr"]="<span class='form-error-phase2'>Please fill in name(s)!</span>";}
	else{$correct["name"]=ucwords(strtolower($n));}
	
	if(empty($s)){$errors["surnameErr"]="<span class='form-error-phase2'>Please fill in surname!</span>";}
	else{$correct["surname"]=ucwords(strtolower($s));}
	
	if(empty($rel)){$errors["relationErr"]="<span class='form-error-phase2'>Please fill in relationship!</span>";}
	else{$correct["relationship"]=ucwords(strtolower($rel));}
	
	if(empty($ini)||!stripos($ini,".")){$errors["initialErr"]="<span class='form-error-phase2'>Please fill in your initials and in the correct way e.g A.M or a.m!</span>";}
	else{$correct["initials"]=strtoupper($ini);}
	
	if($tel=="N/A"){
		$correct["home_telephone"]=$tel;
	}else{
		if(empty($tel)){$errors["telephoneErr"]="<span class='form-error-phase2'>Please fill in your work telephone or N/A if not available!</span>";}
		else if(!preg_match("/^0((1(1|2)|21|31|4(1|3)|51)-\d{3}-\d{4})$/",$tel)){
			$errors["telephoneErr"]="<span class='form-error-phase2'>Please fill in a correct telephone number format  e.g 012-345-6789 or write not applicable this way, N/A </span>";
		}
		else{$correct["home_telephone"]=$tel;}
	}
	
	if(empty($phone)){$errors["phone_noErr"]="<span class='form-error-phase2'>Please fill in your phone number!</span>";}
	else if(!preg_match("/^0((60-[3-9]|64-[0-5]|66-[0-5])\d{2}-\d{4}|(7[1-4689]|6[1-3]|8[1-4])-\d{3}-\d{4})$/",$phone)){
		$errors["phone_noErr"]="<span class='form-error-phase2'>Please fill in correct phone number e.g 072-123-4567!</span>";
	}
	else{$correct["phone_number"]=$phone;}
	
	if(empty($id)|| !preg_match("/[0-9]{13}/",$id)){$errors["idErr"]="<span class='form-error-phase2'>Please fill in a valid identity!</span>";}
	else if(strlen($id)<13 || strlen($id)>13){
		$errors["idErr"]="<span class='form-error-phase2'>Please fill in an ID of 13 digits  <br><p>strval(strlen($id))</p></span>";
	}
	else{$correct["id"]=$id;}
	
	if($email=="N/A"){
		$correct["email"]=$email;
	}
	else {
		if(empty($email)){$errors["emailErr"]="<span class='form-error-phase2'>Please fill in your email else fill in N/A!</span>";}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errors["emailErr"]="<span class='form-error-phase2'>Please fill in a valid email!</span>";
		}
		else{$correct["email"]=$email;}
	}
	
	if(empty($add)){$errors["addressErr"]="<span class='form-error-phase2'>Please fill in your residential address</span>";}
	else{$correct["address"]=$add;}
	
	if(empty($rel)){$errors["relationErr"]="<span class='form-error-phase2'>Please fill in relation</span>";}
	else{$correct["relation"]=$rel;}
	
	if(!empty($errors)){
		print json_encode($errors);
	}else{
		//insert into database correct information
		$con = mysqli_connect("localhost","root","","tkr_db");
		
		$sql="UPDATE ".
		" tkr_db.skill_application SET `kin_surname`='".mysqli_real_escape_string($con,$correct["surname"])."',".
		"`kin_fullnames`='".mysqli_real_escape_string($con,$correct["name"])."',".
		"`kin_initials`='".mysqli_real_escape_string($con,$correct["initials"])."',".
		"`relationship`='".mysqli_real_escape_string($con,$correct["relation"])."',".
		"`kin_home_telephone`='".mysqli_real_escape_string($con,$correct["home_telephone"])."',".
		"`kin_phone_number`='".mysqli_real_escape_string($con,$correct["phone_number"])."',".
		"`kin_email`='".mysqli_real_escape_string($con,$correct["email"])."',".
		"`kin_ID`='".mysqli_real_escape_string($con,$correct["id"])."',".
		"`kin_address`= '".mysqli_real_escape_string($con,$correct["address"])."'".
		" WHERE `ID`='".$_SESSION["ID"]."' ;";
		
		mysqli_query($con,$sql) or die(mysqli_error($con));
		mysqli_close($con);
		
		print '{"status":true}';
	}
	
}


?>