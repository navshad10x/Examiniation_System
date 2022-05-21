<html>
<head>
			<title> Exam</title>
			
			<link rel= "stylesheet" type= "text/css" href= "Exam.css">

  
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
     
        <label for="Examination">Choose Examination:</label>
        <select id="Examination" name="Exam">
        <option value="Choose Subject">Choose Courses</option>
          <option value="BCA">BCA</option>
        </select>
		<p>
        <button name="back" type="submit" value="back"><a href="home.php">Back</button></a>
        <button name="Exam" type="submit" value="Exam"><a href="subjects.php">Click here for nextstep</button></a>
		</p>
        </form>
</div>


<img src="imgsafana/icon2.png" height="38%" align="left" >
<img src="imgsafana/icon3.png" height="38%" align="right">

</body>
</html>