<html>
<head>
	<title>User Registration</title>
	<link rel= "stylesheet" type="text/css" href= "../contact/contact.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
		<!--Navigation bar with signup and login buttons-->
		<div class="topnav">
			<a class="home" href="../html/Homepage.html">Home</a>
			<a href="index.php">Sign up/Login</a>
			<a href="../calc/calculator.php">Calculator</a>
			<a href="../contact/contact.php">Contact</a>
		</div>
<br/>
<br/>
<br/>
<br/>

<div class="container">
	<div class = "login-box">
	<div class="row">
	<div class ="col-md-6">
		<h2> Register Here </h2>
		<p>Please fill in this form to register.</p>
		<hr>
		<form action="registration.php" method="post">
		<div class="form-group">
			<label>Email</label>
			<input type="text" placeholder="Enter Email" name="email" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label>Password</label>
			<input type="password" placeholder="Enter Password" name="password" class="form-control" required>
		</div>
		
		<div class="clearfix">
			<button type="button" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn">Sign Up</button>
		</div>
		</form>
	</div>
	
	<div class ="col-md-6">
		<h2> Login Here </h2>
		<p>Please fill in this form to Login.</p>
		<hr>
		<form action="validation.php" method="post">
		
		<div class="form-group">
			<label>Email</label>
			<input type="text" placeholder="Enter Email" name="email" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label>Password</label>
			<input type="password" placeholder="Enter Password" name="password" class="form-control" required>
		</div>
		
		
		<div class="clearfix">
			<button type="submit" class="loginbtn">Login</button>
		</div>
		</form>
	</div>

	</div>
</div>
</div>




</body>
</html>