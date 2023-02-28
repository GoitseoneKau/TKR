<?php
session_start();
$_SESSION['logged_name']="Goitseone Kau";
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
			<li class="navbar-item active"><a class="nav-link">Dashboard</a></li>
			<li class="navbar-item"><a class="nav-link" href="#">Registered Members<span class="badge" id="badgeReg">0</span></a></li>
			<li class="navbar-item"><a class="nav-link" href="#">New Members<span class="badge" id="badgeNew">0</span></a></li>
			<li class="navbar-item"><a class="nav-link" href="#">Total<span class="badge" id="badgeTotal">0</span></a></li>
		  </ul>
		  <ul class="navbar-nav navbar-right">
			<li class="navbar-item mr-auto"><a class="nav-link" href="logout.php">Log Out</a></li>
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
                        <span class="center-block h2">Welcome <?php print($_SESSION['logged_name']); ?> to the Dashboard</span>
                </div>
            </section>

            <section id="main">
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="list-group ">
                            <a href="index.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"> Overview </a>
                            <div class="list-group-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"><span class="visible-lg visible-md"> Registered-Students</span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item list-group-item" id="reg_mu">Matric Upgrade</a>
                                    <a class="dropdown-item list-group-item" id="reg_sa">Skill Application</a>
                                    <a class="dropdown-item list-group-item" id="reg_ac">Afternoon Class</a>
                                </div>
                            
                        </div>
                        <div class="list-group-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-knight" aria-hidden="true"><span class="visible-lg visible-md"> New-Students</span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item list-group-item" id="new_mu">Matric Upgrade</a>
                                    <a class="dropdown-item list-group-item" id="new_sa">Skill Application</a>
                                    <a class="dropdown-item list-group-item" id="new_ac">Afternoon Class</a>
                                </div>
                            </div>
                            <div class="list-group-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"><span class="visible-lg visible-sm"> Payments</span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item list-group-item" id="pay_mu">Matric Upgrade</a>
                                    <a class="dropdown-item list-group-item" id="pay_sa">Skill Application</a>
                                    <a class="dropdown-item list-group-item" id="pay_ac">Afternoon Class</a>
                                </div>
                            </div>
                            <a id="statement" href="#" class="list-group-item"><span class="glyphicon glyphicon-file" aria-hidden="true"> Statement</a>
                        </div>
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <div class="panel panel-default" >
                            <div class="panel-heading main-color-bg">Overview of Students</div>
                            <div class="panel-body">
                                <div class="col-ms-6 col-md-6 col-lg-6">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"  id="old">0</span></h2>
                                    <h4>Registered Students</h4>
                                </div>
                                </div>
                                <div class="col-ms-6 col-md-6 col-lg-6">
                                <div class="well dash-box">
                                    <h2 ><span class="glyphicon glyphicon-knight" aria-hidden="true" id="new">0</span></h2>
                                    <h4 >New Students</h4>
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
                                <div class="col-sm-8 col-md-8 col-lg-8 center-block" id="form">
                                
                                </div>    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="next" class="btn btn-primary">Next</button>
                            <button id="next2" class="btn btn-primary">Next</button>
                            <button id="next3" class="btn btn-primary">Next</button>

                            <button type="submit" id="saveClass" class="btn btn-warning">Save</button>
                            <button type="submit" id="saveUpgrade" class="btn btn-warning">Save</button>
                            <button type="submit" id="saveSkills" class="btn btn-warning">Save</button> 

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
	<script src="js/modal_info.js"></script>
	<script id="script" src="js/post.js"></script>
    <script id="script1" src="js/counter.js"></script>
    
    <script id="scriptUpgrade" ></script>
    <script id="scriptSkill" ></script>
	<script id="scriptfilter" src="js/filter.js"></script>
  </body>
</html>