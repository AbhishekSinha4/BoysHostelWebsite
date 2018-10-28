<?php
	session_start();
	if(IsSet($_SESSION["usn"])){
		header("location: stu_profile.php");
	}
	else if(IsSet($_SESSION["sta_name"])){
		header("location: sta_profile.php");
	}
	else{
		$_SESSION=Array();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/register.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">PES Boys Hostel: Join Us</h1></header>
	<nav>
		<ul>
			<li><a href="gallery_home.php">Gallery</a></li>
			<li><a href="rules.php">Norms and Rules</a></li>
			<li><a href="../index.php">Home</a></li>
		</ul>
		<ul id="sign-in">
			<li><a href="stu_login.php">Student LogIn</a></li>
			<li><a href="sta_login.php">Staff LogIn</a></li>
		</ul>
	</nav>
	<div id="error-box">
		
	</div>
	<div id="form-container">
		<h1>Student Registration Form</h1>
		<form method="POST" action="created_account.php">
			<table>
				<tr>
					<td>USN:</td>
					<td><input type="text" name="usn" id="usn"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="passw" id="passw"></td>
				</tr>
				<tr>
					<td></td>
					<td><span id="passw-status">Empty</span></td>
				</tr>
				<tr>
					<td>Confirm password:</td>
					<td><input type="password" name="c_passw" id="c_passw"></td>
				</tr>
				<tr>
					<td colspan="2"><h2>Student Details:</h2></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="stu_name" id="stu_name"></td>
				</tr>
				<tr>
					<td>Date Of Birth:</td>
					<td><input type="date" name="stu_dob" id="stu_dob"></td>
				</tr>
				<tr>
					<td>E-mail ID:</td>
					<td><input type="text" name="stu_email" id="stu_email"></td>
				</tr>
				<tr>
					<td>Mobile Number:</td>
					<td><input type="number" name="stu_number" id="stu_number"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><textarea name="stu_address" id="stu_address"></textarea></td>
				</tr>
				<tr>
					<td>Course:</td>
					<td><select name="stu_course" id="stu_course">
						<option>Choose Course</option>
						<option>BTECH-CSE</option>
						<option>BTECH-ECE</option>
						<option>BTECH-ME</option>
						<option>BTECH-EEE</option>
						<option>BTECH-CV</option>
						<option>BTECH-BT</option>
						<option>MTECH-CSE</option>
						<option>MTECH-ECE</option>
						<option>MTECH-ME</option>
						<option>MTECH-EEE</option>
						<option>MTECH-CV</option>
						<option>MTECH-BT</option>
						<option>BBA</option>
						<option>MBA</option>
						<option>BDes</option>
						<option>BArch</option>
						<option>LLB</option>
					</select></td>
				</tr>
				<tr>
					<td colspan="2"><h2>Parent Details:</h2></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" class="parent" name="p_name" id="p_name"></td>
				</tr>
				<tr>
					<td>E-mail ID:</td>
					<td><input type="mailid" class="parent" name="p_email" id="p_email"></td>
				</tr>
				<tr>
					<td>Mobile Number:</td>
					<td><input type="number" class="parent" name="p_number" id="p_number"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><textarea class="parent" name="p_address" id="p_address"></textarea></td>
				</tr>
				<tr>
					<td><h2>Guardian Details:</h2></td>
					<td><p>Parent is Guardian? </p><input type="checkbox" name="localite" id="localite"></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" class="guardian" name="g_name" id="g_name"></td>
				</tr>
				<tr>
					<td>E-mail ID:</td>
					<td><input type="mailid" class="guardian" name="g_email" id="g_email"></td>
				</tr>
				<tr>
					<td>Mobile Number:</td>
					<td><input type="number" class="guardian" name="g_number" id="g_number"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><textarea class="guardian" name="g_address" id="g_address"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" id="submit"></td>
				</tr>
			</table>
		</form>
	</div>
	<footer>
		<ul>
			<li><a href='about_us.php'>About Us</a></li>
			<li><a href='#'>F.A.Q</a></li>
			<li><a href='anti_ragging.php'>Anti-Ragging Policy</a></li>
			<li><a href='contact.php'>Contact</a></li>
		</ul>
		<p>&copy All Rights Reserved</p>
		<p>Parent site: www.pes.edu</p>
	</footer>
<script type="text/javascript" src="../assets/js/register.js"></script>
</body>
</html>