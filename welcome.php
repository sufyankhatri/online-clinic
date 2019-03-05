<!DOCTYPE html>
<html>

<head>
	<title>PHP checking</title>
	<link rel="stylesheet" type="text/css" href="my.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
	
	<?php 
 	 $servername = "localhost";
 $username = "id5553243_sufyan";
 $password = "infinitywar";
 $dbname = "id5553243_clinic";
 $Firstname=$_POST['Firstname'];
 $Lastname=$_POST['Lastname'];
$email=$_POST['email'];
 $age=$_POST['age'];
 $Gender=$_POST['Gender'];
 $pass=$_POST['password'];
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 

 $sql = "INSERT INTO user (firstname, lastname, email,age,Gender,password)
 VALUES ('$Firstname', '$Lastname','$email','$age','$Gender','$pass')";

 if ($conn->query($sql) === TRUE) {
 	 
 ?>
 	 <script type="text/javascript">
 		alert("Sign Up Successfull");
     window.location.href="index.php";
 	</script>   	
 <?php
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $conn->close();
	 ?>

</body>
</html>