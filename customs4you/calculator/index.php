<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>About Us</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link href="../about/about.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-style">
			<div class="container">
				<div class="navbar-header">
				
			
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuicon">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				
				<a href="../Index.php"><img class="logo" src="Logo2.jpg"/></a>
				</div>
				<div class="collapse navbar-collapse" id="menuicon">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../homepage/NewHome.html">&nbsp; Homepage &nbsp; </a></li>
				<li><a href="../About.php">&nbsp; About Us &nbsp; </a></li>
				<li><a href="index.php">&nbsp; SignUp/Login &nbsp;</a></li>
				<li><a href="../calc/calculator.php">&nbsp; Calculate  &nbsp;</a></li>
				<li><a href="../contact/contact.php">&nbsp; Contact Us &nbsp;</a></li>
				<li><a href="../privatepolicy.php">&nbsp; Private Policy &nbsp;</a></li>
				</ul>
				</div>	
			</div>
		</nav>	
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