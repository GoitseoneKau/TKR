<?php
    $dbServername ='localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dbName ='tkr_db';
	$request = $_POST['request'];
	$sql="";
    $conn = mysqli_connect( $dbServername,$dbUsername, $dbPassword,$dbName);
//registered titles
//Database of All Registered Applicants

	  if($conn){
		$output="";
		
		if($request=="mu"){
			$filter ="<option value='matric_id' selected>Matric ID</option>
					<option value='surname'>Surname</option>
					<option value='fullnames'>Fullnames</option>
					<option value='ID'>ID</option>";
			$title="Matric Upgrage Registered Students";
		}
		if($request=="sa"){
			$filter ="<option value='student_id' selected>student_id</option>
					<option value='Surname'>Surname</option>
					<option value='Fullnames'>Fullnames</option>
					<option value='ID'>ID</option>";
			$title="Skills Application Registered Students";
		}
					
		if($request=="ac"){
			$filter ="<option value='class_id' selected>Class ID</option>
					<option value='Surname'>Surname</option>
					<option value='Name'>Name</option>
					<option value='ID'>ID</option>";
			$title="Afterschool Classes Registered Students";
		}
		
		
		$output.="
				<div>
				<div class='text-right'>
                      <button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#myModal'>Add Student</button>
                  </div>
                  <br/>
                      
                              <div class='row'>
							  <div class='col-6'>
							  
									<div class='input-group input-group-default mb-3'>
										<div class='input-group-prepend'>
											
												<button class='btn btn-primary' id='search'>Search <span class='glyphicon glyphicon-search' aria-hidden='true'></span></button>
											
											<input type='text' name='search' id='search_text' class='form-control form-control-sm rounded-0 border-primary' placeholder='Search Records...'>
									
										</div>
									</div>
								</div>
								<div class='col-6'>
									<div class='input-group input-group-lg mb-2'>	
										<div class='input-group-append' aria-describedby='inputGroup-sizing-sm'>
										<span class='input-group-text' id='inputGroup-sizing-sm'> filter on : </span>
											<select class='form-control'>".
												$filter
											."</select>
										</div>
									</div>		
									</div>
								
								</div>
							  </div>
                       
				  ";
				  
		if($request=="mu"){
			if(isset($_POST['request_header'],$_POST['request_data'])){
				$request_h = $_POST['request_header'];
				$request_d = $_POST['request_data'];
				$sql="SELECT * FROM matric_upgrade WHERE `".$request_h."` LIKE ’".$request_d."\%’";
			}
			$sql = "select * from matric_upgrade where `status`='registered'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			$output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                        <thead>
											<tr class='bg-danger'><th colspan='100%' class='text-center'>".$title."</th></tr>
                                          <tr>
											  <th>matric_id</th><th>surname</th><th>fullnames</th><th>DOB</th><th>Gender</th><th>ID</th>
											  <th>Contact_Number</th> 
											  <th>Guardian_Surname</th><th>Guardian_Name</th><th>Guardian_Contact_Number</th>
											  <th>Guardian_Relationship</th> 
											  <th>Modules</th> 
											  <th>Student_Declaration</th><th>Parent_Declaration</th> 
											  <th>id_photo</th><th>previous_result</th><th>certified_ID</th>
										  </tr>
                                        </thead><tbody>";
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr>
								<th>".$row['matric_id']."</th><th>".$row['surname']."</th><th>".$row['fullnames']."</th><th>".$row['DOB']."</th><th>".$row['Gender']."</th><th>".$row['ID']."</th> 
								<th>".$row['Contact_Number']."</th> 
								<th>".$row['Guardian_Surname']."</th><th>".$row['Guardian_Name']."</th><th>".$row['Guardian_Contact_Number']."<th></th>".$row['Guardian_Relationship']."</th> 
								<th>".$row['Modules']."</th> 
								<th>".$row['Student_Declaration']."</th><th>".$row['Parent_Declaration']."</th><th>".$row['id_photo']."<th></th>".$row['previous_result']."</th>
								<th>".$row['certified_ID']."</th>
						  </tr>";
				}
			}
		}
		
		if($request=="sa"){
			if(isset($_POST['request_header'],$_POST['request_data'])){
				$request_h = $_POST['request_header'];
				$request_d = $_POST['request_data'];
				$sql="SELECT * FROM skill_application WHERE `".$request_h."` LIKE ’".$request_d."\%’";
			}
			$sql = "select * from skill_application where status='registered'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			 $output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                      <thead>
										<tr class='bg-danger'><th colspan='100%' class='text-center'>".$title."</th></tr>
                                        <tr>
										<th>student_id </th><th>Surname </th><th>Fullnames</th><th> Initials </th><th>Title</th> 
										<th>Working</th><th>Company_Working</th><th>Years_Working</th><th>Company_Occupation</th> 
										<th>Highest_Grade_Passed</th><th> Qualification</th> 
										<th>ID</th><th>Certified_ID</th><th>DOB</th><th>Gender</th> 
										<th>Marital_Status</th><th>Residential_Address</th><th>Res_Code</th><th>Postal_Address</th>
										<th>Postal_Code</th><th>Correspondence_Address</th> <th>Home_Telephone</th><th>Work_Telephone</th><th>Phone_Number</th><th>Fax_Number</th><th>Email</th>
										<th>kin_surname</th><th>kin_fullnames</th><th>kin_initials</th><th>relationship</th>
										<th>kin_home_telephone</th><th>kin_phone_number</th><th>kin_email</th><th>kin_ID</th>
										<th>kin_address</th>
										<th>Guardian_Surname</th><th>Guardian_Name</th><th>Guardian_Initials</th>
										<th>Guardian_Title </th><th>Guardian_Occupation</th><th>Guardian_ID</th>
										<th>Guardian_Relationship </th><th>Guardian_Home_Telephone</th> 
										<th>Guardian_Work_Telephone</th><th> Guardian_Email</th><th> Guardian_Cellnumber</th> 
										<th>declaration</th>
										</tr>
									</thead><tbody>"; 
									
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr><td>".$row['student_id']."</td><td>".$row['Surname']."</td><td>".$row['Fullnames']."</td><td>"
								.$row['Initials']."</td><td>".$row['Title']."</td><td>".$row['Working']."</td><td>".$row['Company_Working']."</td><td>".$row['Years_Working']."</td><td>".$row['Company_Occupation']."</td><td>".
								$row['Highest_Grade_Passed']."</td><td>".$row['Qualification']."</td><td>".
								$row['ID']."</td><td>".$row['Certified_ID']."</td><td>".$row['DOB']."</td><td>".$row['Gender']."</td> 
								<td>".
								$row['Marital_Status']."</td><td>".$row['Residential_Address']."</td><td>".$row['Res_Code']."</td>
								<td>".
								$row['Postal_Address']."</td><td>".$row['Postal_Code']."</td><td>".$row['Correspondence_Address']."</td> 
								<td>".
								$row['Home_Telephone']."</td><td>".$row['Work_Telephone']."</td><td>".$row['Phone_Number']."</td><td>".
								$row['Fax_Number']."</td><td>".$row['Email']."</td><td>".$row['kin_surname']."</td><td>".
								$row['kin_fullnames']."</td><td>".$row['kin_initials']."</td><td>".$row['relationship']."</td>
								<td>".
								$row['kin_home_telephone']."</td><td>".$row['kin_phone_number']."</td><td>".$row['kin_email']."</td><td>".
								$row['kin_ID']."</td><td>".$row['kin_address']."</td><td>".$row['Guardian_Surname']."</td><td>".
								$row['Guardian_Name']."</td><td>".$row['Guardian_Initials']."</td><td>".$row['Guardian_Title']."</td>
								<td>".
								$row['Guardian_Occupation']."</td><td>".$row['Guardian_ID']."</td><td>".$row['Guardian_Relationship']."</td><td>".$row['Guardian_Home_Telephone']."</td><td>".$row['Guardian_Work_Telephone']."</td><td>".
								$row['Guardian_Email']."</td><td>".$row['Guardian_Cellnumber']."</td><td>".
								$row['declaration']."</td>
								</tr>";
				}
			}
		}
		
		if($request=="ac"){
			if(isset($_POST['request_header'],$_POST['request_data'])){
				$request_h = $_POST['request_header'];
				$request_d = $_POST['request_data'];
				$sql="SELECT * FROM tkr_afternoon_class WHERE `".$request_h."` LIKE ’".$request_d."\%’";
			}
			$sql = "select * from tkr_afternoon_class where status='registered'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			$output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                        <thead>
										<tr class='bg-danger'><th colspan='100%' class='text-center'>".$title."</th></tr>
                                          <tr><th>Class ID</th><th>Name</th><th>Surname</th><th>ID</th>
										  <th>Country</th><th> Province</th><th> City</th><th> Physical_Address</th><th>Code</th> 
										  <th>Email</th><th> Home_Tel_Num</th><th> Phone_Number</th> 
										  <th>Gender</th><th>DOB</th><th> Age</th> 
										  <th>Medical_Condition_Status</th><th> Medical_Condition_description</th> 
										  <th>Parent_Permission</th><th>Date_of_Application</th>
										  <th>Parent_Initials</th><th>Parent_Name</th> <Th>Parent_Surname</th></tr>
                                        </thead><tbody>";
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr>
						  <td>".$row['class_id']."</td><td>".$row['Name']."</td><td>".$row['Surname']."</td><td>".$row['ID']."</td>".
						  "<td>".$row['Country']."</td><td>".$row['Province']."</td><td>".$row['City']."</td><td>".$row['Physical_Address']."</td><td>".$row['Code']."</td>".
						  "<td>".$row['Email']."</td><td>".$row['Home_Tel_Num']."</td><td>".$row['Phone_Number']."</td>".
						  "<td>".$row['Gender']."</td><td>".$row['DOB']."</td><td>".$row['Age']."</td>".
						  "<td>".$row['Medical_Condition_Status']."</td><td>".$row['Medical_Condition_Status']."</td>".
						  "<td>".$row['Parent_Permission']."</td><td>".$row['Date_of_Application']."</td><td>".$row['Parent_Initials']."</td>".
						  "<td>".$row['Parent_Name']."</td><td>".$row['Parent_Surname']."</td>".
						  "</tr>";
				}
			}
		}
		  
		$output.="</tbody></table></div>";
  
	  }else{
		  $output="conection failed";
	  }
	  
	  mysqli_close($conn);          
                                        
    print($output);
?>