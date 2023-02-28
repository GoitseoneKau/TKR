<?php
    if(!empty($_POST)) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $country = $_POST['country'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $physicalAdd = $_POST['physicalAddress'];
        $code = $_POST['code'];
		$age = empty($_POST['age'])? 0 : intval($_POST['age']);
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $telephoneN = $_POST['telephoneN'];
        $phoneN = $_POST['phoneN'];
		$dob = $_POST['dateOfBirth'];
		$id = $_POST['id'];
		$medCheck = $_POST['medCheck'];
        $medCondition = $_POST['medCondition'];
        $initials = $_POST['initials'];
		$parent_n=$_POST['parent_name'];
		$parent_sname=$_POST['parent_surname'];
		$check = empty($_POST['check'])?"":$_POST['check'];

		//error array
		$errors = array();
		//correct array
		$correct = array();

        if(empty($name)){
			$errors["nameErr"]="<span class='form-error'>Please fill in name(s)!</span>";
		}else{
			$correct['name']=ucwords(strtolower($name));
		} 
		
		if(empty( $surname)){
			$errors["surnameErr"]="<span class='form-error'>Please fill in surname!</span>";
		}else{
			$correct['surname']=ucwords(strtolower($surname));
		} 
		
		if(empty( $country)){
			$errors["countryErr"]="<span class='form-error'>Please fill in country!</span>";
		}else{
			$correct['country']=ucwords(strtolower($country));
		}
		
		if(empty($province)){
			$errors["provinceErr"]="<span class='form-error'>Please fill in your province!</span>";
		}else{
			$correct['province']=ucwords(strtolower($province));
		}
		
		if(empty($city)){
			$errors["cityErr"]="<span class='form-error'>Please fill in your city!</span>";
		}else{
			$correct['city']=ucwords(strtolower($city));
		}
		
		if(empty($physicalAdd)){
			$errors["physicalAddErr"]="<span class='form-error'>Please fill in your physical address!</span>";
		}else{
			$correct['physical_add']=ucwords(strtolower($physicalAdd));
		}
		
		if(empty($code)){
			$errors["codeErr"]="<span class='form-error'>Please fill in city code!</span>";
		}else{
			$correct['code']=intval($code);
		}

		if($age==0){
			$errors["ageErr"]="<span class='form-error'>Please choose a valid age!</span>";
		}else{
			$correct['age']=$age;
		}

		//email validation
		if(!preg_match_all("/^(N\/A)|(n\/a)/",$email)){
			if(empty($email)){
				$errors["emailErr"]="<span class='form-error'>Please fill in email or
				<br> N/A if not available!</span>";
			}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors["emailErr"]= "<span class='form-error'>Please fill in correct email!</span>";
			}else{
				$correct['email']=$email;
			}
		}else{
			$correct['email']=$email;
		}
		
		if(!preg_match_all("/^(N\/A)|(n\/a)/",$telephoneN)){
			if(empty($telephoneN)){
				$errors["telephoneErr"]="<span class='form-error'>Please fill in telephone number or N/A!</span>";
			}else if(
			!preg_match("/^0((1(1|2)|21|31|4(1|3)|51)-\d{3}-\d{4})$/",$telephoneN)){
				$errors["telephoneErr"]="<span class='form-error'>Please fill in a correct telephone number format  e.g 012-345-6789 or write not applicable this way, N/A </span>";
			}
			else{
				$correct['telephone']=$telephoneN;
			}
		}else{
			$correct['telephone']=$telephoneN;
		}
		
		
		if(empty($phoneN)){
			$errors["phoneErr"]="<span class='form-error'>Please fill in phone number!</span>";
		}
		else if(!preg_match("/^0((60-[3-9]|64-[0-5]|66-[0-5])\d{2}-\d{4}|(7[1-4689]|6[1-3]|8[1-4])-\d{3}-\d{4})$/",$phoneN)){
			$errors["phoneErr"]="<span class='form-error'>Please fill in correct phone number e.g 072-123-4567!</span>";
		}
		else{
			$correct['phone']=$phoneN;
		}
		

		$age_difference=date("Y")-date("Y", strtotime($dob) );

		if(empty( $dob)){
			
			$errors["dobErr"]="<span class='form-error'>Please choose your date of birth!</span>";
		}
		else if($age_difference!=$age){
			$errors["dobErr"]="<span class='form-error'>Date of birth does not match set age!</span>";
			$errors["ageErr"]="<span class='form-error'>Age does not match with DOB given!</span>";
		}
		else{
			$correct['dob']=$dob;
		}

		//student id
		if(empty($id)|| !preg_match("/[0-9]{13}/",$id)){$errors["idErr"]="<span class='form-error'>Please fill in a valid identity!</span>";}
		else if(strlen($id)<13 || strlen($id)>13){
			$errors["idErr"]="<span class='form-error'>Please fill in an ID of 13 digits</span>";
		}
		else{$correct["id"]=$id;}
		
		if(empty($parent_n)){
			$errors["parent_nameErr"]="<span class='form-error'>Please fill in your parent's name</span>";
		}else{
			$correct['parent_name']=ucwords(strtolower($parent_n));
		}
		
		if(empty($parent_sname)){
			$errors["parent_surnameErr"]="<span class='form-error'>Please fill in your parent's surname</span>";
		}
		else{
			$correct['parent_surname']=ucwords(strtolower($parent_sname));
		}
		
		if(empty($initials)) {
           $errors["initialsErr"]= "<span class='form-error'>Please fill in your initials!</span>";
        }else{
			$correct['initials']=$initials;
		}
		
		if($check!="agree"){
			$errors["checkErr"]= "<span class='form-error'>Please check on this for verification!</span>";
		}else{
			$correct["parentAgreement"]=$check;
		}
		
		if($medCheck=="yes"){
			if(empty($medCondition)){
				$errors["medConErr"]="<span class='form-error'>Please fill in your medical condition!</span>";
			}else{
				$correct['med_condition']=ucwords(strtolower($medCondition));
				$correct['med_con_stat']=$medCheck;
			}
		}else{
			$correct['med_condition']="none";
			$correct['med_con_stat']=$medCheck;
		}
		
		
		$correct['application_date']=date("d-m-Y");
		
		//error sent when condition met 
		if(!empty($errors)){
			 echo json_encode($errors);
		}else{
			//push data into database
			$con = mysqli_connect("localhost","root","","tkr_db");
			mysqli_query($con,"INSERT INTO `tkr_db.tkr_afternoon_class` ".
			"(Name,Surname,ID,Country,".
			"Province,City,Physical_Address,".
			"Code,Email,Home_Tel_Num,".
			"Phone_Number,Gender,DOB,".
			"Age,Medical_Condition_Status,Medical_Condition_description,".
			"Parent_Permission,Date_of_Application,Parent_Initials,".
			"Parent_Name,Parent_Surname,status) ".
			"VALUES('".$correct['name']."','".
			$correct['surname']."','".
			$correct['id']."','".
			$correct['country']."','".
			$correct['province']."','".
			$correct['city']."','".
			$correct['physical_add']."','".
			$correct['code']."','".
			$correct['email']."','".
			$correct['telephone']."','".
			$correct['phone']."','".
			$gender."',".
			"DATE('".$correct['dob']."'),".
			$correct['age'].",'".
			$correct['med_con_stat']."','".
			$correct['med_condition']."','".
			$correct['parentAgreement']."',".
			"DATE('".$correct['application_date']."'),'".
			$correct['initials']."','".
			$correct['parent_name']."','".
			$correct['parent_surname']."',registered);");

			print mysqli_error($con);
			
			mysqli_close($con);
			
			print '{"home":"index.html","success":"Thank you,your application has been sent"}';
		}
       
    }
?>

