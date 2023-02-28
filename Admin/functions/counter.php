<?php
    $dbServername ='localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dbName ='tkr_db';
    $output = array();
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    //count registered students
    $stmt = "SELECT COUNT(status) FROM matric_upgrade WHERE status='registered'";
    $result=mysqli_query($conn,$stmt);
    $output['registered'] = mysqli_fetch_row($result)[0];

    $stmt = "SELECT COUNT(status) FROM skill_application WHERE status='registered'";
    $result=mysqli_query($conn,$stmt);
    $output['registered'] += mysqli_fetch_row($result)[0];

    $stmt = "SELECT COUNT(status) FROM tkr_afternoon_class WHERE status='registered'";
    $result=mysqli_query($conn,$stmt);
    $output['registered'] += mysqli_fetch_row($result)[0];
 

    //count newly registered students
    $stmt = "SELECT COUNT(status) FROM matric_upgrade WHERE status='new'";
    $result=mysqli_query($conn,$stmt);
    $output['new'] = mysqli_fetch_row($result)[0];

    $stmt = "SELECT COUNT(status) FROM skill_application WHERE status='new'";
    $result=mysqli_query($conn,$stmt);
    $output['new'] += mysqli_fetch_row($result)[0];

    $stmt = "SELECT COUNT(status) FROM tkr_afternoon_class WHERE status='new'";
    $result=mysqli_query($conn,$stmt);
    $output['new'] += mysqli_fetch_row($result)[0];

    //total students
    $output['total']=strval( $output['new']+$output['registered'] );

    mysqli_close($conn);

    print(json_encode($output));

?>