<?php
	
	require("../functions/keys.php");

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
			$title="New Matric Upgrage Students";
		}
		if($request=="sa"){
			$filter ="<option value='student_id' selected>student_id</option>
					<option value='Surname'>Surname</option>
					<option value='Fullnames'>Fullnames</option>
					<option value='ID'>ID</option>";
			$title="New Skills Application Students";
		}
					
		if($request=="ac"){
			$filter ="<option value='class_id' selected>Class ID</option>
					<option value='Surname'>Surname</option>
					<option value='Name'>Name</option>
					<option value='ID'>ID</option>";
			$title="New Afterschool Classes Students";
		}
		
		
		$output.="
				<div>
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
			$sql = "select * from matric_upgrade where `status`='new'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			$output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                        <thead>
											<tr class='bg-danger'><th colspan='100%' class='text-center'>".$title."</th></tr>
                                          <tr>
											  <th>matric_id</th><th>surname</th><th>fullnames</th><th>DOB</th><th>Gender</th><th>ID</th>
											  <th>Contact_Number</th> 
										  </tr>
                                        </thead><tbody>";
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr>
									<td>".$row['matric_id']."</td><td>".$row['surname']."</td><td>".$row['fullnames']."</td><td>".$row['DOB']."</td><td>".$row['Gender']."</td><td>".$row['ID']."</td> 
									<td>".$row['Contact_Number']."</td>
									<td><button class='btn btn-primary' data-toggle='modal' data-target='#".$row['matric_id']."'>View</button></td>
								<div id='".$row['matric_id']."' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
				  
							  <!-- Modal content-->
							  <div class='modal-content'>
								<div class='modal-header'>
											<h5 class='modal-title' id='info'>Info</h5>
											<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>
										<div class='modal-body'>
											<div class='container-fluid'>
												<div class='row'>
													<div class='col-md-12'><form id='form".$row['matric_id']."'  class='form-center'>
														";

														for ($i=0;$i<count(getMatricKeys());$i++){
															
															if(!preg_match("/(jpeg|jpg|png)/", strtolower( pathinfo($row[getMatricKeys()[$i]],PATHINFO_EXTENSION) ))){
																  $output.="<div class='form-group'>
																  <label class='form-control-label'>".getMatricKeys()[$i].": </label>
																  <input type='text' class='form-control' id='' name='".getMatricKeys()[$i]."' value='".$row[getMatricKeys()[$i]]."'>
																  </div>";
															}else{
																  $output.="<div class='form-group'>
																  <label class='form-control-label'>".getMatricKeys()[$i].": </label>
																  <img class='img-thumbnail h-50 w-100' id='' src='THUTO KEYA RONA PROJECTS/".$row[getMatricKeys()[$i]]."' width='250px' height='250px'/>
																  </div>";
															}
													 	}
														
						$output.=							"</form></div>
												</div>
											</div>
										</div>
										<div class='modal-footer'>
											<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
											<button type='button' onclick='UpdateSubmit(".$row['matric_id'].",'form".$row['matric_id']."')'  class='btn btn-primary'>submit</button>
										</div>
									</div>
								</div>
								
							</div>
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
			$sql = "select * from skill_application where status='new'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			 $output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                      <thead>
										<tr class='bg-danger'><th colspan='100%' class='text-center'>".$title."</th></tr>
                                        <tr>
											<th>student_id </th><th> Surname </th><th> Fullnames </th><th> Initials </th><th> Title </th><th> ID </th><th> DOB </th><th>more</th> 
										</tr>
									</thead><tbody>"; 
									
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr>
					  			<td>".$row['student_id']."</td><td>".$row['Surname']."</td><td>".$row['Fullnames']."</td><td>"
								.$row['Initials']."</td><td>".$row['Title']."</td><td>".$row['ID']."</td><td>".$row['DOB']."</td>
								<td><button class='btn btn-primary' data-toggle='modal' data-target='#".$row['student_id']."'>View</button></td>
								<div id='".$row['student_id']."' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
				  
							  <!-- Modal content-->
							  <div class='modal-content'>
								<div class='modal-header'>
											<h5 class='modal-title' id='info'>Info</h5>
											<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>
										<div class='modal-body'>
											<div class='container-fluid'>
												<div class='row'>
													<div class='col-md-12'><form id='form".$row['student_id']."' class='form-center'>
														";

														for ($i=0;$i<count(getSkillKeys());$i++){
															
															if(!preg_match("/(jpeg|jpg|png)/", strtolower( pathinfo($row[getSkillKeys()[$i]],PATHINFO_EXTENSION) ))){
																  $output.="<div class='form-group'>
																  <label class='form-control-label'>".getSkillKeys()[$i].": 
																  <input type='text' class='form-control' id='' name='".getSkillKeys()[$i]."' value='".$row[getSkillKeys()[$i]]."'></label>
																  </div>";
															}else{
																  $output.="<div class='form-group'>
																  <label class='form-control-label'>".getSkillKeys()[$i].": </label>
																  <img class='img-thumbnail h-50 w-100' id='' src='THUTO KEYA RONA PROJECTS/".$row[getSkillKeys()[$i]]."' width='250px' height='250px/>
																  </div>";
															}
													  }
														
						$output.=							"</form></div>
												</div>
											</div>
										</div>
										<div class='modal-footer'>
											<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
											<button type='button' id='update_submit'  onclick='UpdateSubmit(".$row['student_id'].",'form".$row['student_id']."')'  class='btn btn-primary'>submit</button>
										</div>
									</div>
								</div>
								
							</div>
								</tr>";
				}
			}
		}
		
		if($request=="ac"){
			if(isset($_POST['request_header'],$_POST['request_data'])){
				$request_h = $_POST['request_header'];
				$request_d = $_POST['request_data'];
				$sql="SELECT * FROM tkr_afternoon_class WHERE `".$request_h."` LIKE ’".$request_d."\%’";
			}else{
				$sql = "SELECT * FROM tkr_afternoon_class WHERE status='new'";
			}

			
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			$output .= "<div class='table-responsive'>
                                    <table class='table table-bordered table-hover table-striped' id='table-data'>
                                        <thead>
										<tr class='bg-danger'><th colspan='100%' class='text-center'>".$title."</th></tr>
                                          <tr><th>Class ID</th><th>Name</th><th>Surname</th><th>ID</th>
										  <th>Email</th><th> Phone_Number</th><th>More</th>
										  </tr>
                                        </thead><tbody>";
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr>
						  <td>".$row['class_id']."</td><td>".$row['Name']."</td><td>".$row['Surname']."</td><td>".$row['ID']."</td>".
						  "<td>".$row['Email']."</td><td>".$row['Phone_Number']."</td>".
						  "<td><button class='btn btn-primary' data-toggle='modal' data-target='#".$row['class_id']."'>View</button></td>".
						  "<div id='".$row['class_id']."' class='modal fade' role='dialog'>
						  <div class='modal-dialog'>
				  
							  <!-- Modal content-->
							  <div class='modal-content'>
								<div class='modal-header'>
											<h5 class='modal-title' id='info'>Info</h5>
											<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>
										<div class='modal-body'>
											<div class='container-fluid'>
												<div class='row'>
													<div class='col-md-12'><form id='form".$row['class_id']."'  class='form-center'>
														";

														for ($i=0;$i<count(getAfternoonKeys());$i++){
															
															  if(!preg_match("/(jpeg|jpg|png)/", strtolower( pathinfo($row[getAfternoonKeys()[$i]],PATHINFO_EXTENSION) ))){
																	$output.="<div class='form-group'>
																	<label class='form-control-label'>".getAfternoonKeys()[$i].": </label>
																	<input type='text' class='form-control' id='' name='".getAfternoonKeys()[$i]."' value='".$row[getAfternoonKeys()[$i]]."'>
																	</div>";
															  }else{
																	$output.="<div class='form-group'>
																	<label class='form-control-label'>".getAfternoonKeys()[$i].": </label>
																	<img class='img-thumbnail h-50 w-100 id='' src='THUTO KEYA RONA PROJECTS/".$row[getAfternoonKeys()[$i]]."' width='250px' height='250px/>
																	</div>";
															  }
														}
														
						$output.=							"</form></div>
												</div>
											</div>
										</div>
										<div class='modal-footer'>
											<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
											<button type='button' id='update_submit' onclick='UpdateSubmit(".$row['class_id'].",'form".$row['class_id']."')'   class='btn btn-primary'>submit</button>
										</div>
									</div>
								</div>
								
							</div>".
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