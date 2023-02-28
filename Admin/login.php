<?php
    session_start();

    function clean_up($str){
        return mysqli_real_escape_string( htmlentities( htmlspecialchars( trim($str) ) ) );
    }
    
    $username=clean_up( $_POST['user']);
    $password=clean_up($_POST['password']);
    $dbServername ='localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dbName ='tkr_db';
    $output=array();
    
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    if(!empty($_POST)){
        $query = "SELECT * FROM users WHERE username='$username' AND Password='$password' LIMIT=1";
   
        $result=mysqli_query($conn,$stmt);
        
        //test1
        if(mysqli_num_rows($result)>0){
            $_SESSION['logged_name']=$username;
            $row = mysqli_fetch_assoc($result);
            header("Location: http://localhost/THUTO%20KEYA%20RONA%20PROJECTS/Admin/dashboard.php");
        }else{
            $output['password_error']="<span class='form-error'>Password Incorrect</span>";
            $output['user_error']="<span class='form-error'>Username not recognized</span>";
        }

        //test2
        if($result){
            $_SESSION['logged_name']=$username;
            $row = mysqli_fetch_assoc($result);
            header("Location: http://localhost/THUTO%20KEYA%20RONA%20PROJECTS/Admin/dashboard.php");
        }else{
            $output['password_error']="<span class='form-error'>Password Incorrect</span>";
            $output['user_error']="<span class='form-error'>Username not recognized</span>";
        }
        print($output);
        mysqli_close($conn);
    }
    
?>