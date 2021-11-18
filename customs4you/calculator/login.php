<html>
<head>
	<title>User Registration</title>
	<link rel= "stylesheet" type="text/css" href= "style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!--Navigation Bar - linking other pages to index page-->
<ul>
		<li><a href="../pages/about.html">&nbsp; About Us &nbsp; </a></li>
		<li><a href="../pages/topics.html">&nbsp; Topics &nbsp;</a></li>
		<li style="float:right"><a class="active" href="../pages/contact.html">Contact Us</a></li>
		<li style="float:right"><a class="active" href="login.php">Sign Up/Login</a></li>
		<!--Page Heading-->
		<h1> 
		<?php 
		echo '<a  href="../index.html"> <img src="S&S Blogs Logo.jpg" alt="Home" width="150" height="150"/></a>';
		?>
		</h1>
</ul>
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