<?php

    $hostname = "localhost";
    $username = "root";
    $password = "sql123";
    $database = "PROJECT_COLLEGE";
    
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $emails=$_POST["email"];
    $passwords=$_POST["password"];
    
    $sql = "SELECT * from users_details";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }

    while ($row=mysqli_fetch_array($result)) {
        if ($row['email']==$emails && $row['password']==$passwords){
           echo "Hello..........".$row['full_name'];
           echo "<br>"."<br>"."WELCOME";
           break;
        }
    } 
    
    if($row==NULL){
        echo "login ! FAILED!";
    }   
    
         	
    mysqli_close($conn);
?>

