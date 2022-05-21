<html>
<head>
			<title> Exam</title>
			
			<link rel= "stylesheet" type= "text/css" href= "Exam.css">


<style>

img{
	
	margin-left: 43%;
	
	
	
	
}

</style>

  
</head>


<body >

<div class="heading">
	<h1 align = center> Online Examination System </h1>
 
</div>


<div class= navbar>


  <a href="Home.php">My Account</a>
  <a class="active" href="#StartExam">Start Exam</a>
  <a href="editprofile.php">Edit Profile</a> 
  <a href="feedback.html">Feedback</a>
  <a href="login.php">Logout</a>
</div>	

<div class=" innerform">

    <form action="">
        <h3 align= "center">Start Examination</h3>
        <hr>
     
        <label for="Examination">Choose Subjects:</label>
        <select id="Examination" name="Exam" onchange="location = this.options[this.selectedIndex].value;">
        
          <option value="select">Select</option>
		  <option value="quiznew.html">HTML</option>
		  <option value="pythonquiz.html">Python</option>
		  <option value="cyberquiz.html">Cyber Security</option>
		  <option value="dbmsquiz.html">DBMS</option>
		  <option value="phpquiz.html">PHP</option>
        </select>
		<p>
        <button name="back" type="submit" value="back"><a href="exam.php">Back</button></a>
        <button name="Exam" type="submit" value="Exam"><a href="">Best of luck!</button></a>
		</p>
        </form>
</div>
<img src="imgsafana/icon14.png"  height="41%" width="35%" align="right">
</body>
</html>