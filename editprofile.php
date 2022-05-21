<?php

include("connection.php");
error_reporting(0);


?>
<?php


if(isset($_POST['update']))
{

	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="UPDATE `safa` SET name='$name', email='$email',password = '$password' WHERE `id` = '$id'";
$result=mysqli_query($conn,$query);

if($result)
{
	echo '<script type="text/javascript">alert("Data Updated ");</script>';
}
else
{
	echo'<script type="text/javascript">alert("Data Not Update");</script>';
}
}
?>

<html>
<head>
<title>Editprofile</title>
<link rel="stylesheet" type="text/css" href="new.css">

<style>

img{
	
	margin-left: 43%;
	margin-top: -40px;
	height: 25%;
	width: 25%
	
	
}

</style>



</head>
<body>
 <h1 align= "center"> Online Examination System </h1> 
 
 <div class= navbar>


  <a href="home.php">My Account</a>
  <a href="Exam.php">Start Exam</a>
  <a class="active" href="editprofile.php">Edit Profile</a> 
  <a href="feedback.html">Feedback</a>
  <a href="login.php">Logout</a>
</div>	


	    

<div class="register">
<img src="imgsafana/icon12.png" >
<h1>Edit Profile</h1>

    <form method="post" action="editprofile.php" > 
	<p>Id</p>
    <input type="number" name="id" placeholder="Enter Id">
    <p>Username</p>
	
    <input type="text" name="name" placeholder="Enter Username">
	<p>Email</p>
    <input type="email" name="email" placeholder="Enter email">

	<p>Password</p>
    
    <input type="password" name="password" placeholder="Enter password">
	
	<input type="submit" name="update" value="UPDATE DATA">
    </form>

</div>
</body>
</html>
