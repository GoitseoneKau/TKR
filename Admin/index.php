<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
     <!-- Bootstrap -->
	 <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/boobyStyle.css">
  </head>
  <body>

	<nav class="navbar navbar-default navbar-expand-lg navbar-expand-md">
		<a class="navbar-brand" href="#">NHCPA</a>
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		 </button>
		 
			
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="navbar-nav navbar-left">
			<li class="navbar-item active"><a class="nav-link" href="index.php">Dashboard</a></li>
			<li class="navbar-item"><a class="nav-link" href="Registered.php">Registered Members</a></li>
			<li class="navbar-item"><a class="nav-link" href="new.php">New Members<span class="badge">0</span></a></li>
		  </ul>
		  <ul class="navbar-nav navbar-right">
			<li class="navbar-item mr-auto"><a class="nav-link" href="#">Log Out</a></li>
		  </ul>
		</div><!--/.nav-collapse -->
       
    </nav>
  
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard<small> Manage your Applicants</small></h1>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </header>
    <section id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
            </div>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <div class="list-group ">
                    <a href="index.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"> Dashboard</a>
                    <div class="list-group-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"> Registered-Students</a>
						<div class="dropdown-menu">
							<a class="dropdown-item list-group-item" id="reg_mu">Matric Upgrade</a>
							<a class="dropdown-item list-group-item" id="reg_sa">Skill Application</a>
							<a class="dropdown-item list-group-item" id="reg_ac">Afternoon Class</a>
						</div>
					
				   </div>
                   <div class="list-group-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"> New-Students</a>
						<div class="dropdown-menu">
							<a class="dropdown-item list-group-item" id="new_mu">Matric Upgrade</a>
							<a class="dropdown-item list-group-item" id="new_sa">Skill Application</a>
							<a class="dropdown-item list-group-item" id="new_ac">Afternoon Class</a>
						</div>
					</div>
                    <div class="list-group-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"> Payments</a>
						<div class="dropdown-menu">
							<a class="dropdown-item list-group-item" id="pay_mu">Matric Upgrade</a>
							<a class="dropdown-item list-group-item" id="pay_sa">Skill Application</a>
							<a class="dropdown-item list-group-item" id="pay_ac">Afternoon Class</a>
						</div>
					</div>
                    <a id="statement" href="#" class="list-group-item"><span class="glyphicon glyphicon-file" aria-hidden="true"> Statement</a>
                </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default" >
                      <div class="panel-heading main-color-bg">Overview of Students</div>
                      <div class="panel-body">
                        <div class="col-md-6">
                          <div class="well dash-box">
                            <h2 id="old"><span class="glyphicon glyphicon-user" aria-hidden="true">0</h2>
                            <h4>Registered Students</h4>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="well dash-box">
                            <h2 id="new"><span class="glyphicon glyphicon-user" aria-hidden="true">0</h2>
                            <h4>New Students</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Modal -->
	  <div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				 <h4 class="modal-title">Add Student</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
				  <div class="row">
					<div class="col-sm-6 ">
					  <form class=" form-center">
						<div class="form-group">
						  <label class="form-control-label">First Name: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Last Name: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Identity No: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Email: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Country: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Province: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">City: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Physical Address: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Code: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Postal Adress: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Code: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Phone Number: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Home Tel Number: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
						<div class="form-group">
						  <label class="form-control-label">Work Tel Number: </label>
						  <input type="" class="form-control" id="" name="">
						</div>
					  </form>
					</div>
				  </div>
			  </div>
			  <div class="modal-footer">
				  <button type="submit" class="btn btn-warning">Save</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>

		</div>
	  </div>
    </section>

    <footer id="footer">
      <div class="container">
        <p>Copyright NHCPA-SA, &copy; 2019 </p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		let request_header="",
		request_value="",category ="";
		
		$('button#search').click(function(){
			
			request_value = $(this).val();
			console.log(request_value);
			request_header = $('select option:selected').val();
			console.log(request_header);
			
			if(category="ac"){
				//afternoon class
				$('.panel-body').load('Registered.php',{request:category, request_header:request_header, request_value:request_value});
			}
			
			if(category="mu"){
				//matric upgrade
				$('.panel-body').load('Registered.php',{request:category, request_header:request_header, request_value:request_value});
			}
			
			if(category="sa"){
				//skill application
				$('.panel-body').load('Registered.php',{request:category, request_header:request_header, request_value:request_value});
			}
			
		});
		
		
		//registered
		//afternoon class
		$('#reg_ac').click(function(){
			$('.panel-body').load('Registered.php',{request:'ac'});
			$('.panel-heading').html('Afternoon Class Students');
			category ="ac";
			
		});
		//matric upgrade
		$('#reg_mu').click(function(){
			$('.panel-body').load('Registered.php',{request:'mu'});
			$('.panel-heading').html('Matric Upgrade');
			category ="mu";
		});
		//skill application
		$('#reg_sa').click(function(){
			$('.panel-body').load('Registered.php',{request:'sa'});
			$('.panel-heading').html('Skill Application');
			category ="sa";
		});
		
		//new students
		//afternoon class
		$('#new_ac').click(function(){
			$('.panel-body').load('new.php',{request:'ac'});
		});
		//matric upgrade
		$('#new_mu').click(function(){
			$('.panel-body').load('new.php',{request:'mu'});
		});
		//skill application
		$('#new_sa').click(function(){
			$('.panel-body').load('new.php',{request:'sa'});
		});
		
		
		//payments
		//afternoon class
		$('#pay_ac').click(function(){
			$('.panel-body').load('pay.php',{request:'ac'});
		});
		//matric upgrade
		$('#pay_mu').click(function(){
			$('.panel-body').load('pay.php',{request:'mu'});
		});
		//skill application
		$('#pay_sa').click(function(){
			$('.panel-body').load('pay.php',{request:'sa'});
		});
		
		
	});
	
	</script>
  </body>
</html>