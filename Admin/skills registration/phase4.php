<?php
session_start();
if(!empty($_POST)){
	$check=$_POST['check'];
	$error = array();
	
	
	if($check==false){
		$errors["checkErr"]="<span class='form-error-phase4'>Please click/check on the agreement in order to continue!</span>";
	}
	
	if(!empty($errors)){
		print json_encode($errors);
	}else{
		$con = mysqli_connect("localhost","root","","tkr_db");
		$check = "agreed";
		$sql="UPDATE skill_application SET declaration='".$check."' WHERE ID='".$_SESSION["ID"]."';";
		
		mysqli_query($con,$sql);
		
		unset($_SESSION);
		session_unset();
		session_destroy();
		
		print '{"status":true}';
	}
}


?>