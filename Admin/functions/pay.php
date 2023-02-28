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
							  
	  $output .= "<div class='table-responsive'>
					<table class='table table-bordered table-hover table-striped' id='table-data'>
					<thead>
					  <tr>
						  <th>ID</th>
						  <th>Last Payment</th>
						  <th>January</th>
						  <th>February</th>
						  <th>March</th>
						  <th>April</th>
						  <th>May</th>
						  <th>June</th>
						  <th>July</th>
						  <th>August</th>
						  <th>September</th>
						  <th>October</th>
						  <th>November</th>
						  <th>December</th> 
					  </tr>
					</thead><tbody>";
				
		if($request=="mu"){
			$sql = "select * from payments where category='matric_upgrade'";
		}
		
		if($request=="sa"){
			$sql = "select * from payments where category='skill_application'";
		}
		
		if($request=="ac"){
			$sql = "select * from payments where category='afterschool_class'";
		}
		
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					  $output.="<tr><td>".
								$row['student_ID']."</td><td>".
								$row['last_payment']."</td><td>".
								$row['January']."</td><td>".
								$row['February']."</td><td>".
								$row['March']."</td><td>".
								$row['April']."</td><td>".
								$row['May']."</td><td>".
								$row['June']."</td><td>".
								$row['July']."</td><td>".
								$row['August']."</td><td>".
								$row['September']."</td><td>".
								$row['October']."</td><td>".
								$row['November']."</td><td>".
								$row['December']."</td></tr>";
				}
			}
		
		
		  
		$output.="</tbody></table></div>";
  
	  }else{
		  $output="conection failed";
	  }
	  
	  mysqli_close($conn);          
                                        
    print($output);
?>