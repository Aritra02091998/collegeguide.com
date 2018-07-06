<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "Arnab@1997";
    $database = "project";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }
    
    
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $flag=0;
    while ($row=mysqli_fetch_array($result)) {
        
        if($email==$row['email'] && $password==$row['password']){
            
            include 'project_dashboard.html'; 
            $flag=1;
            //setcookie("name",$row['name']);
            $_SESSION['name']=$row['name'];
            break;
        }
    }
    if($flag==0){
        echo "user not registered";
    }

    mysqli_close($conn);
    
?>

