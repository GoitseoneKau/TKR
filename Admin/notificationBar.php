<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/boobyStyle.css">
  </head>
  <body>
  <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>NHCPA</span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li><a href="Registered.php">Registered Members</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-
                expanded="false">New Members<span class="badge badge-light">5</span></a></li></a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">
                  <small><i>26 April 2019</i></small><br/>
                      New Member applied
                </a>
                <div class="dropdown-divider"></div>
              </div>
          </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Log Out</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
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
                    <a href="Registered.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"> Registered-Members</a>
                    <a href="new.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"> New-Members</a>
                    <a href="pay.php" class="list-group-item"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"> Payments</a>
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-file" aria-hidden="true"> Statement</a>
                </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                      <div class="panel-heading main-color-bg">Overview of Applicants</div>
                      <div class="panel-body">
                        <div class="col-md-6">
                          <div class="well dash-box">
                            <h2 id="old"><span class="glyphicon glyphicon-user" aria-hidden="true"> 0</h2>
                            <h4>Registered Members</h4>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="well dash-box">
                            <h2 id="new"><span class="glyphicon glyphicon-user" aria-hidden="true"> 0</h2>
                            <h4>New Members</h4>
                          </div>
                        </div>
                      </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>