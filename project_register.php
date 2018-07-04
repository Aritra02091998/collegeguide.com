<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "Arnab@1997";
    $database = "project";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $sql = "INSERT INTO register (name, email, password,phone) VALUES ('$name', '$email', '$password','$phone')";

    if (mysqli_query($conn, $sql)) {
        	echo "<h1 align=center>Registration successful</h1>";
    } else {
        	echo "Error: " . $sql . "<br/>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    echo"<br/>";
    echo"<h2 align=center><a href='project_home.php'>click here to go back to home page</a></h2>";
?>
