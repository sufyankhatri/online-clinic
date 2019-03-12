<!DOCTYPE html>
<html>
<head>
	<title>Online Clinic</title>
	<link rel="stylesheet" type="text/css" href="01.css">
</head>
<body>
	 <div class="login">
		Email <input class="sg" type="text" name="email">&nbsp&nbsp&nbsp Password <input class="sg" type="text" name="password"> 
		<input type="submit" name="lg" value="login" id="lg">


	</div>
		<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDon't have an Account?</h1> 
	<div class="Sign">
		<h1>Create new account</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		First Name <input class="sg" type="text" name="Firstname" required="required" value=<?php echo $_POST['Firstname'];?>>	Last Name <input class="sg" type="text" name="Lastname" required="required"><br>
		Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="sg" type="text" name="email" required="required">
		Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="sg" type="text" name="age" required="required"><br>
		
		Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="Gender">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="Gender">Female <br>
		
		Password &nbsp&nbsp&nbsp<input class="sg" type="text" name="password" required="required"><br><br>
		
		<input type="submit" name="finish" value="Sign up">

		
	</form>
	</div>
	
	<?php $Firstname="no input";
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	$Firstname=$_POST["Firstname"];
	?>
</body>
</html>