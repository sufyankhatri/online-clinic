<!DOCTYPE html>
<html>
<head>
	<title>Online Clinic</title>
	
	<link rel="stylesheet" type="text/css" href="my.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
  <div class="logo">

	 	<h1>ONLINE CLINIC</h1>
	</div>
		<div class="input">
		<form method="post" action="<?php
	$_sname="login.php";
	 echo htmlspecialchars($_sname);
	 ?>">
	 	<div class="row">
			<div class="col-12">
				
			</div>
		</div> 
		Email <input class="lg" type="text" name="input_email">&nbsp&nbsp&nbsp Password <input class="lg" type="password" name="input_password"> 
		<input type="submit" name="lg" value="login" id="lg">
		</form>
			</div>
  	
	<div id="dnt">	
		<h1>Don't have an Account?</h1> 
	</div>
	<div id="name">
		<h1>Muhammad Sufyan</h1> <h1>CT-055</h1> 
	</div>
	<div class="Sign">
		<h1>Create new account</h1>
	<form method="post" action="<?php
	$_name="welcome.php";
	 echo htmlspecialchars($_name);
	 ?>">
		
		First Name <input class="sg" type="text" name="Firstname" required="required" >	Last Name <input class="sg" type="text" name="Lastname" required="required"><br>
		Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="sg" name="email" required="required" type="email">
		Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="sg" type="text" name="age" required="required"><br>
		
		Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="Gender" value="Male">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="Gender" value="Female">Female <br>
		
		Password &nbsp&nbsp&nbsp<input class="sg" name="password" required="required" type="password"><br><br>
		
		<input type="submit" name="finish" value="Sign up">

		
	</form>
	</div>
	<script type="text/javascript" src="index.js"></script>
</body>
</html>