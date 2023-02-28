<?php
    $dbServername ='localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dbName ='tkr_db';

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    $output='';
    $stmt = "select * from matric_upgrade where ID like '%".$_POST['search']."%' or last_name like '%".$_POST['search']."%' ";
    $result="mysqli_query($conn,$stmt)";
    
    if(mysqli_num_rows($result)>0){
        $output.="<thead>
                        <tr>
                            <th>NHCPA ID</th>
                            <th>First Name</th>
                            <th>Surname</th>
                            <th>ID Number</th>
                            <th>Email</th>
                            <th>Date and Registered</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                 </thead>
                 <tbody>";
                    while($row = mysqli_fetch_array($result)){
                        $output.="
                        <tr>
                        <td>".$row['ID_no']."</td>
                        <td>".$row['first_name']."</td>
                        <td>".$row['last_name']."</td>
                        <td>".$row['identity']."</td>
                        <td>".$row['email']. "</td>
                        <td>".$row['Date_Registered']."</td>
                        </tr>";}
        $output.="</tbody>";
        printf( $output);                
    }else{
        printf("<h3>Result not found</h3>");
    }
    mysqli_close($conn);
?>