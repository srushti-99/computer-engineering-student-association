<?php

require('db1.php');

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$reg_date = date("Y-m-d H:i:s");
$name= $_REQUEST['name'];
$dob= $_REQUEST['dob'];
$email= $_REQUEST['email'];
$branch=$_REQUEST['branch'];
$enroll=$_REQUEST['enroll'];
$event = $_REQUEST['event'];
$gender= $_REQUEST['gender'];

$ins_query="insert into new_reg (`reg_date`,`name`,`dob`,`email`,`branch`,`enroll`,`event`,`gender`) values ('$reg_date','$name','$dob','$email','$branch','$enroll','$event','$gender')";
mysqli_query($con,$ins_query) or die(mysqli_error($con));
$status = "You Are Form Submited Successfully...!!!</br></br>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" href="" />
</head>


<link rel="icon" type="image/png" href="logo.png"/>

<h1><img src="logo.png" width="50" height="50"><u>GOVERNMENT POLYTECHNIC, KHAMGAON</u></h1>
<marquee behavior=alternate direction="left" scrollamount="10"><h3>Welcome to Online Registration Process For Technical &  Non-Technical Event, Government Polytechnic , Khamgaon</marquee>
<body bgcolor="grey">
<div class="form">
<p><a href="home.php">Home</a>

<div>
<h1>Registration Form</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<h3>
	<p style="color:green;"><?php echo $status; ?></p>
<p>Full Name:<br><input type="text" name="name" placeholder="Enter Full Name" required /></p>
<p>Date Of Birth:<br><input type="date" name="dob" placeholder="Enter DOB" required /></p>
<p>Email:<br><input type="text" name="email" placeholder="Enter Email" required /></p>
<p>Branch:<br><select name="branch" required> 
  <option value="--">-SELECT</option>
  <option value="co">CO</option>
  <option value="ce">CE</option>
  <option value="ee">EE</option>
  <option value="et">ETE</option>
  <option value="me">ME</option>
</select></p>
<p>Enrollment Number:<br> <input type="text" name="enroll" placeholder="Enter Enrollment No" required /></p>
<p>Event:<br><select name="event" required> 
  <option value="--">-SELECT</option>
  <option value="wpd">Web Page Design</option>
  <option value="blind-c">Blind-C</option>
  <option value="techno-quiz">Techno Quiz</option>
  <option value="poster-presentation">Poster Presetation</option>
  <option value="langame">Lan Gaming</option>
  <option value="smartapp">Smart App</option>
  <option value="pcasemlbe">PC Assmbly</option>
  <option value="nfs">Lan Gaming(NFS)</option>
  <option value="blind-java">Blind Java</option>
  <option value="projectompitetion">Project Competition</option>
  <option value="pub-g">Pub-G</option>
  <option value="sabase-smart-kon">Sabse Smart Kon</option>
  <option value="counter-strike">Counter Strike</option>
  <option value="circuit-menia">Circuit Menia</option>
  <option value="paper-presetation">Paper Presentation</option>
  <option value="pub-g"></option>
  <option value="robo-race">Robo-Race</option>
  <option value="robo-war">Robo-War</option>
</select></p>

<p>Gender:<br><select name="gender" required> 
  <option value="--">-SELECT</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
    <option value="other">Other</option>
  </select></p>
<p><input name="submit" type="submit" value="Submit" /><input name="reset" type="reset" value="Reset" /></p>
</form>
</h3>
<br /><br /><br /><br />
</div>
</div>
</body>
</html>