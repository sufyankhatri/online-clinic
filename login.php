<!DOCTYPE html>
<html>

<head>
	<title>Login Testing</title>
	<link rel="stylesheet" type="text/css" href="my.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
	
	<?php
$servername = "localhost";
 $username = "id5553243_sufyan";
 $password = "infinitywar";
 $dbname = "id5553243_clinic";
$input_email=$_POST['input_email'];
$input_password=$_POST['input_password'];
$flag=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT email, password FROM user";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($input_email===$row["email"] && $input_password===$row["password"]){
    	$flag=1;
      // header('Location: home.html'); 
?>
  <script type="text/javascript">
     window.location.href="Home.html";
   </script>    	
<?php
    }
    }
 if ($flag==0){
 
 ?>
 <script>
     alert("Log In Failed: Invalid Username or Password Try again!");
      window.location.href="index.php";
 </script>
 <?php
}
$conn->close();
?>
   	
</body>
</html>