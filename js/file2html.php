<?php

$file = fopen('../new2.html','w');
fwrite($file,"<html>
<head>

    <!--The meta data of the application-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <!--The title of the forms-->
        <title>Afternoon Class Application Forms</title>
        
        <!-- Bootstrap -->
		<link href=\"css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <!--Thuto normal style sheet-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/thutoStyle.css\">
    
        <!--Style sheets-->
        <style>
          .container{
            background-image:url('images/x.jpg');
			background-size:cover;
			background-position:center;
			background-repeat:no-repeat;
			/*background-attachment:fixed;*/
          }
		  body{
			 background-color: grey;
		  }
          .form-error{
              color:red;
          }

          .input-error{
              box-shadow: 0 0 15px red;
          }

          .form-success{
              color:green;
          }

        </style>
    
</head>
<body>");
fwrite($file,$_POST['file']);
fwrite($file,"<script src=\"js/jquery.js\"></script>
<script src=\"js/jquery-3.3.1.min.js\"></script>
<script src=\"js/bootstrap.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
</body></html>");
fclose($file);



echo file_get_contents('../new2.html');
?>