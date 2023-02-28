<?php
    $dbServername ='localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dbName ='nhcpadatabase';

    $conn = mysqli_connect( $dbServername,$dbUsername, $dbPassword,$dbName);

    
?>


<html>
<head>
    <meta charset="utf-8">
    <title>New Members</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <div id="header">
        <div class="logo"><a href="#"><span>NHCPA</span></a></div>
    </div>

    <div class="container">
        <div class="Sidebar">
			<ul id="nav">
                <li><a href="admin.html">Dashboard</a></li>
				<li><a href="registeredMem.php">Registered Members</a></li>
				<li><a href="newMem.php">New Members</a></li>
				<li><a href="#">Payments</a></li>
				<li><a href="#">Statement</a></li>
			</ul>
			
			<ul id="navLog">
				<li><a href="#">Log Out</a></li>	
			</ul>
        </div>
        <div class="NewMem">
            <table>
                <tr>
                    <th>NHCPA ID</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>ID Number</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Work Tel Number</th>
                    <th>Date and Registered</th>
                </tr>
              <?php
                    if($conn){

                        $sql = "select tm.*, tmc.phone_number , tmc.Home_TelNo, tmc.Work_TelNo 
                                from tblmember as tm 
                                JOIN tblmember_contacts as tmc  on tm.ID_no=tmc.ID_no";
                
                        $result = mysqli_query($conn,$sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo"<tr><td>".$row['ID_no']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['identity']."</td><td>".$row['email'].
                        "</td><td>".$row['phone_number']."</td><td>".$row['Work_TelNo'].$row['Date_Registered']."</td></tr>";
                            }
                        }
                
                    }else{
                        echo'conection failed';
                    }
                    mysqli_close($conn);          
              
              ?>
                
            </table>
        </div>
    </div>

    <div id="footer">

    </div>
</body>
</html>