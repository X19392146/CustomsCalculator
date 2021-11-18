<?php

session_start();
if(!isset($_SESSION['email'])){
	header('location:index.php');
}

?>

<html>
<head>
	<title>Welcome</title>
	<link rel= "stylesheet" type="text/css" href= "welcome.css">
</head>
<body>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
	
	<h2>Welcome <?php echo $_SESSION['email']; ?></h2>
	
	
	<div class="container">
	<div class="center">
	</div>
	</div>
	<br/>
	<br/>
	<br/>
	<br/>
	
	<div class="container">
	
	<div class="center">
	<a href="logout.php"><button type="button" class="logoutbtn"> LOG OUT</button></a>
	</div>
	</div>
	



</body>

</html>
