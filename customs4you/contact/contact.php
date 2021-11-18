<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>
	Contact Form
	</title>


<script> 
 
function validateform(){  
<!--first name validation-->	
var first_name=document.myform.first_name.value;  

  
if (first_name==null || first_name==""){  
  alert("First Name can't be blank");  
  return false;  
}

<!--Last name validation-->	
var last_name=document.myform.last_name.value;  

  
if (last_name==null || last_name==""){  
  alert("Last Name can't be blank");  
  return false;  
}

<!--Gender validation-->	
var Gender=document.myform.Gender.value;  

  
if (Gender==null || Gender==""){  
  alert("Gender can't be blank");  
  return false;  
}

<!--validation for email address -->
<!-- must have @ sign and dot in the correct place, the @ cannot be the first value-->
 var emailID = document.myform.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myform.email.focus() ;
            return false;
         
         return( true );
}		 
<!--validation for country select menu-->
         if( document.myform.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         
         return( true );
}
<!--Commment validation-->	
var comment=document.myform.comment.value;  

  
if (comment==null || comment==""){  
  alert("Commment cant be blank ");   
  return false;  
}
}
  
</script>  	


</head>

    <body>
		<!--All information on the page inside the main-body div-->
	<div id="main-body">
	

		
		<!--Navigation bar with signup and login buttons-->
		<div class="topnav">
			<a class="home" href="../html/Homepage.html">Home</a>
			<a href="../calculator/index.php">Sign up/Login</a>
			<a href="../calc/calculator.php">Calculator</a>
			<a href="contact.php">Contact</a>
		</div>
		

		
    <center>
	<br/><br/>
	<h3>Contact us here!</h3>
        <h1> </h1>
		<br/><br/>
  
  <!--action="insert.php"
   put this in form tag to insert into database   "-->
        <form  name="myform" method="post"  action="insert.php" action="abc.jsp" onsubmit="return validateform()">
              
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
  
                
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
  
                
           
              <p>  <label for="Gender">Gender:</label>	</p>
				<input type="radio" id="Gender" name="Gender" value="Female">
	 			 <label for="Female">Female</label><br>
	 			 <input type="radio" id="Gender" name="Gender" value="Male">
	  			<label for="Male">Male</label><br>
	 			 <input type="radio" id="Gender" name="Gender"value="noSay">
	 			 <label for="noSay">Prefer not to say</label>
           
  <br/> <br/>
                            
            <p>
                <label for="country">Country:</label>
				   <select name = "Country">
                     <option value = "-1" selected>[choose yours]</option>
                     <option value = "USA">USA</option>
                     <option value = "UK">UK</option>
                     <option value = "Ireland">Ireland</option>
                  </select>
            </p>

  
                           
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailID">
            </p>
			
			<p>
                <label for="comment">Comment:</label>
				<textarea id="comment" name="comment" rows="4" cols="50">
				</textarea>
                <!--<input type="textarea" name="comment" id="comment">-->
            </p>
                
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>