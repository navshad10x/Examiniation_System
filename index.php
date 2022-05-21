<html>
<head>
<title>Register </title>
<link rel="stylesheet" href="registerdesigndemo.css"/>
</head>
<body>

 <h1 align= "center"> Online Examination System </h1> 


	    <h1>Register Student</h1>


<div class="register">

       <form method="post" action="index.php"> 
<p>Id</p>
    <input type="id" name="id" placeholder="Enter Id">
       <p>Username</p>
      <input type="name" name="name" placeholder="Enter Username" required>
	  <p>Email</p>
    <input type="email" name="email" placeholder="Enter email">

	  <p>Password</p>
      <input type="password" name="password" placeholder="Enter password" required>
      
      <input type="submit" name="submit" value="Register">
	  <div class="login_link">Already a member?
	  <a href="login.php">Login</a>
      </form>
</div>  
</body>
</html>


<?php


$servername = "localhost" ;
$user = "root";
$password = "" ;
$db = "safana";

$conn=mysqli_connect($servername, $user, $password, $db);

if (!$conn){
	
	print "connection error" ;
	
}

if (isset($_POST["submit"])) {
	
	$id=$_POST["id"];
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	$query="INSERT INTO safa
		(id,name,email,password) VALUES ('$id','$name','$email','$password')";
	
	$run=mysqli_query($conn,$query);
	
	if($run){
		print "<p> <font color=green>User Registered Successfully</font> </p>";
	}
	else{
		print "<p> <font color=red>User Already Registered</font> </p>";
	}
}



?>


