<?php
    $dbServername ='localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dbName ='tkr_db';
	$request = $_POST['request'];
    $conn = mysqli_connect( $dbServername,$dbUsername, $dbPassword,$dbName);
//registered titles
//Database of All Registered Applicants

	  if($conn){
		$output="";
		
		$output.="<div class='text-right'>
                      <button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#myModal'>Add Member</button>
                  </div>
                  <br/>
                  <div class='form-inline'>
                       <div class='row'>
                              <div class='col-xs-6'>
								<h3 class='text'>Search <span class='glyphicon glyphicon-search' aria-hidden='true'> 
									<input type='text' name='search' id='search_text' class='form-control form-control-sm rounded-0 border-primary' placeholder='Search Records...'>
								</h3>
							  </div>
                       </div>
				  </div>";
				  
		if($request=="mu"){
			$sql = "select * from matric_upgrade where status='new'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			$output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                        <thead>
                                          <tr>
											  <th>matric_id</th>
											  <th>surname</th>
											  <th>fullnames</th>
											  <th>DOB</th>
											  <th>Gender</th>
											  <th>ID</th>
											  <th>Contact_Number</th> 
											  <th>Guardian_Surname</th>
											  <th>Guardian_Name</th>
											  <th>Guardian_Contact_Number</th>
											  <th>Guardian_Relationship</th> 
											  <th>Modules</th> 
											  <th>Student_Declaration</th>
											  <th>Parent_Declaration</th> 
											  <th>id_photo</th>
											  <th>previous_result</th>
											  <th>certified_ID</th>
										  </tr>
                                        </thead><tbody>";
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr><td>".
									$row['matric_id']."</td><td>".
									$row['surname']."</td><td>".
									$row['fullnames']."</td><td>".
									$row['DOB']."</td><td>".
									$row['Gender']."</td><td>".
									$row['ID']."</td><td>".
									$row['Contact_Number']."</td><td>".
									$row['Guardian_Surname']."</td><td>".
									$row['Guardian_Name']."</td><td>".
									$row['Guardian_Contact_Number']."</td><td>".
									$row['Guardian_Relationship']."</td><td>".
									$row['Modules']."</td><td>".
									$row['Student_Declaration']."</td><td>".
									$row['Parent_Declaration']."</td><td>".
									$row['id_photo']."</td><td>".
									$row['previous_result']."</td><td>".
									$row['certified_ID'].
								"</td></tr>";
				}
			}
		}
		
		if($request=="sa"){
			$sql = "select * from skill_application  where status='new'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			 $output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                      <thead>
                                        <tr>
										<th>student_id</th>
										<th>Surname</th>
										<th>Fullnames</th>
										<th>Initials</th>
										<th>Title</th> 
										<th>Working</th>
										<th>Company_Working</th>
										<th>Years_Working</th>
										<th>Company_Occupation</th> 
										<th>Highest_Grade_Passed</th>
										<th> Qualification</th> 
										<th>ID</th>
										<th>Certified_ID</th>
										<th>DOB</th>
										<th>Gender</th> 
										<th>Marital_Status</th>
										<th>Residential_Address</th>
										<th>Res_Code</th>
										<th>Postal_Address</th>
										<th>Postal_Code</th>
										<th>Correspondence_Address</th>
										<th>Home_Telephone</th>
										<th>Work_Telephone</th>
										<th>Phone_Number</th>
										<th>Fax_Number</th>
										<th>Email</th>
										<th>kin_surname</th>
										<th>kin_fullnames</th>
										<th>kin_initials</th>
										<th>relationship</th>
										<th>kin_home_telephone</th>
										<th>kin_phone_number</th>
										<th>kin_email</th>
										<th>kin_ID</th>
										<th>kin_address</th>
										<th>Guardian_Surname</th>
										<th>Guardian_Name</th>
										<th>Guardian_Initials</th>
										<th>Guardian_Title </th>
										<th>Guardian_Occupation</th>
										<th>Guardian_ID</th>
										<th>Guardian_Relationship </th>
										<th>Guardian_Home_Telephone</th> 
										<th>Guardian_Work_Telephone</th>
										<th> Guardian_Email</th>
										<th> Guardian_Cellnumber</th> 
										<th>declaration</th>
										</tr>
									</thead><tbody>"; 
									
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr><td>".
								$row['student_id']."</td><td>".
								$row['Surname']."</td><td>".
								$row['Fullnames']."</td><td>".
								$row['Initials']."</td><td>".
								$row['Title']."</td><td>".
								$row['Working']."</td><td>".
								$row['Company_Working']."</td><td>".
								$row['Years_Working']."</td><td>".
								$row['Company_Occupation']."</td><td>".
								$row['Highest_Grade_Passed']."</td><td>".
								$row['Qualification']."</td><td>".
								$row['ID']."</td><td>".
								$row['Certified_ID']."</td><td>".
								$row['DOB']."</td><td>".
								$row['Gender']."</td><td>".
								$row['Marital_Status']."</td><td>".
								$row['Residential_Address']."</td><td>".
								$row['Res_Code']."</td><td>".
								$row['Postal_Address']."</td><td>".
								$row['Postal_Code']."</td><td>".
								$row['Correspondence_Address']."</td><td>".
								$row['Home_Telephone']."</td><td>".
								$row['Work_Telephone']."</td><td>".
								$row['Phone_Number']."</td><td>".
								$row['Fax_Number']."</td><td>".
								$row['Email']."</td><td>".
								$row['kin_surname']."</td><td>".
								$row['kin_fullnames']."</td><td>".
								$row['kin_initials']."</td><td>".
								$row['relationship']."</td><td>".
								$row['kin_home_telephone']."</td><td>".
								$row['kin_phone_number']."</td><td>".
								$row['kin_email']."</td><td>".
								$row['kin_ID']."</td><td>".
								$row['kin_address']."</td><td>".
								$row['Guardian_Surname']."</td><td>".
								$row['Guardian_Name']."</td><td>".
								$row['Guardian_Initials']."</td><td>".
								$row['Guardian_Title']."</td><td>".
								$row['Guardian_Occupation']."</td><td>".
								$row['Guardian_ID']."</td><td>".
								$row['Guardian_Relationship']."</td><td>".
								$row['Guardian_Home_Telephone']."</td><td>".
								$row['Guardian_Work_Telephone']."</td><td>".
								$row['Guardian_Email']."</td><td>".
								$row['Guardian_Cellnumber']."</td><td>".
								$row['declaration']."</td></tr>";
				}
			}
		}
		
		if($request=="ac"){
			
			$sql = "select * from tkr_afternoon_class where status='new'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			$output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                        <thead>
                                          <tr>
											  <th>Name</th>
											  <th>Surname</th>
											  <th>ID</th>
											  <th>Country</th>
											  <th>Province</th>
											  <th>City</th>
											  <th> Physical_Address</th>
											  <th>Code</th> 
											  <th>Email</th>
											  <th> Home_Tel_Num</th>
											  <th> Phone_Number</th> 
											  <th>Gender</th>
											  <th>DOB</th>
											  <th> Age</th> 
											  <th>Medical_Condition_Status</th>
											  <th> Medical_Condition_description</th> 
											  <th>Parent_Permission</th>
											  <th>Date_of_Application</th>
											  <th>Parent_Initials</th>
											  <th>Parent_Name</th>
											  <th>Parent_Surname</th>
										  </tr>
                                        </thead><tbody>";
										
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr><td>".
									$row['class_id']."</td><td>".
									$row['Name']."</td><td>".
									$row['Surname']."</td><td>".
									$row['ID']."</td><td>".
									$row['Country']."</td><td>".
									$row['Province']."</td><td>".
									$row['City']."</td><td>".
									$row['Physical_Address']."</td><td>".
									$row['Code']."</td><td>".
									$row['Email']."</td><td>".
									$row['Home_Tel_Num']."</td><td>".
									$row['Phone_Number']."</td><td>".
									$row['Gender']."</td><td>".
									$row['DOB']."</td><td>".
									$row['Age']."</td><td>".
									$row['Medical_Condition_Status']."</td><td>".
									$row['Medical_Condition_description']."</td><td>".
									$row['Parent_Permission']."</td><td>".
									$row['Date_of_Application']."</td><td>".
									$row['Parent_Initials']."</td><td>".
									$row['Parent_Name']."</td><td>".
									$row['Parent_Surname']."</td>".
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