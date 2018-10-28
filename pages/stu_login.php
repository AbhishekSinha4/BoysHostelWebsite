<?php
	session_start();
	if(IsSet($_SESSION["usn"])){
		header("location: stu_profile.php");
	}
	if(IsSet($_SESSION["sta_id"])){
		header("location: sta_profile.php");
	}
	else{
		$_SESSION=Array();
		session_destroy();
	}
?>
<?php
$errorText="";
$errorBox="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(strlen($_POST["usn"])===0)$errorText.="<p>USN not entered.</p>";
	else if(!preg_match("/^[ a-zA-Z0-9]+$/",$_POST["usn"])) $errorText.="<p>Invalid USN.</p>";
	else{

		$db='pes_boys_hostel';
		$conn=mysqli_connect('localhost','abhishek','abhishek98');

		mysqli_select_db($conn,$db);
		$query="select * from students where usn='".strToUpper($_POST["usn"])."';";
		$result=mysqli_query($conn,$query);
		if($result->num_rows==0)
			$errorText.="<p>USN Doesn't Exist.</p>";
		else{
			 $row=mysqli_fetch_assoc($result);
			if(strlen($_POST["passw"])===0)$errorText.="<p>Password not entered.</p>";
			else{

				if(strcmp($row["passw"],$_POST["passw"])!==0)
					$errorText.="<p>Incorrect Password.</p>";
				else{
					session_start();
					$_SESSION["usn"]=$row["usn"];
					$_SESSION["passw"]=$row["passw"];
					$_SESSION["stu_name"]=$row["stu_name"];
					$_SESSION["stu_dob"]=$row["stu_dob"];
					$_SESSION["stu_email"]=$row["stu_email"];
					$_SESSION["stu_number"]=$row["stu_number"];
					$_SESSION["stu_address"]=$row["stu_address"];
					$_SESSION["stu_course"]=$row["stu_course"];
					$_SESSION["p_name"]=$row["p_name"];
					$_SESSION["p_email"]=$row["p_email"];
					$_SESSION["p_number"]=$row["p_number"];
					$_SESSION["p_address"]=$row["p_address"];
					$_SESSION["g_name"]=$row["g_name"];
					$_SESSION["g_email"]=$row["g_email"];
					$_SESSION["g_number"]=$row["g_number"];
					$_SESSION["g_address"]=$row["g_address"];
					
					header("location: stu_profile.php");
					
				}
			}
		}
	}
	$errorBox="style='display:block'";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hostel: Student Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">PES BOYS HOSTEL</h1></header>
	<nav>
		<ul>
			<li><a href="gallery_home.php">Gallery</a></li>
			<li><a href="rules.php">Norms and Rules</a></li>
			<li><a href="registration.php">Join The Hostel</a></li>
		</ul>
		<ul id="sign-in">
			<li><a href="../index.php">Home</a></li>
			<li><a href="sta_login.php">Staff LogIn</a></li>
		</ul>
	</nav>
	<div id="error-box" <?php echo $errorBox; ?>>
	 <?php echo $errorText ?>
	</div>
	<div id="login">
		<h2>Student Login</h2>
		<form method="POST" action="stu_login.php">
			<table>
				<tr>
					<td><label for="usn">USN:</label></td>
					<td><input type="text" name="usn" id="usn" required></td>
				</tr>
				<tr>
					<td><label for="passw">Password:</label></td>
					<td><input type="password" name="passw" id="passw" required></td>
				</tr>
				<tr>
					<td></td>
					<td id="submitt" align="right"><input type="submit" name="submit" id="submit"></td>
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
</body>
</html>