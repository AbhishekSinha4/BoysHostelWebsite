<?php
	session_start();
	if(IsSet($_SESSION["usn"])){
		header("location: stu_profile.php");
	}
	if(IsSet($_SESSION["sta_id"])){
		header("location: location: sta_profile.php");
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
	if(strlen($_POST["sta_id"])===0)$errorText.="<p>Staff ID not entered.</p>";
	else if(!preg_match("/^[ a-zA-Z0-9]+$/",$_POST["sta_id"])) $errorText.="<p>Invalid Staff ID.</p>";
	else{

		$db='pes_boys_hostel';
		$conn=mysqli_connect('localhost','abhishek','abhishek98');

		mysqli_select_db($conn,$db);
		$query="select * from staff where sta_id='".strToUpper($_POST["sta_id"])."';";
		$result=mysqli_query($conn,$query);
		if($result->num_rows==0)
			$errorText.="<p>Staff ID doesn't Exist.</p>";
		else{
			 $row=mysqli_fetch_assoc($result);
			if(strlen($_POST["sta_passw"])===0)$errorText.="<p>Password not entered.</p>";
			else{

				if(strcmp($row["sta_passw"],$_POST["sta_passw"])!==0)
					$errorText.="<p>Incorrect Password.</p>";
				else{
					session_start();
					$_SESSION["sta_id"]=$row["sta_id"];
					$_SESSION["sta_name"]=$row["sta_name"];
					$_SESSION["sta_dob"]=$row["sta_dob"];
					$_SESSION["sta_doj"]=$row["sta_doj"];
					$_SESSION["sta_email"]=$row["sta_email"];
					$_SESSION["sta_number"]=$row["sta_number"];
					$_SESSION["sta_address"]=$row["sta_address"];
					$_SESSION["can_ann"]=$row["can_ann"];
					$_SESSION["can_del"]=$row["can_del"];
					$_SESSION["can_add"]=$row["can_add"];
					$_SESSION["can_givep"]=$row["can_givep"];
					$_SESSION["sta_passw"]=$row["sta_passw"];
					
					header("location: sta_profile.php");
					
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
	<title>Hostel: Staff Login</title>
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
			<li><a href="stu_login.php">Student LogIn</a></li>
			<li><a href="../index.php">Home</a></li>
		</ul>
	</nav>
	<div id="error-box" <?php echo $errorBox; ?>>
	 	<?php echo $errorText ?>
	</div>
	<div id="login">
		<h2>Staff Login</h2>
		<form action="sta_login.php" method="POST">
			<table>
				<tr>
					<td><label for="sta_id">Staff ID:</label></td>
					<td><input type="text" name="sta_id" id="sta_id" required></td>
				</tr>
				<tr>
					<td><label for="sta_passw">Password:</label></td>
					<td><input type="password" name="sta_passw" id="sta_passw" required></td>
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