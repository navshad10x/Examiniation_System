<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo "Connection Successful";
	

}else{
	
	echo "No";	
}		

mysqli_select_db($con, "safana");

$name = $_POST['name'];
$password = $_POST['password'];

$q = "select * from safa where name = '$name' && password = '$password' ";

 
$result = mysqli_query($con, $q);

$num =mysqli_num_rows($result);



if($num == 1){
	
	$_session['name'] = $name;
	header('location:home.php');
	echo "Wrong password";
	
}else{

	
	header('location:login.php');
}

?>
