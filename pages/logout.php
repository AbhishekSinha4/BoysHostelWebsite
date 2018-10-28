<?php
	session_start();
	$name="";
	if(IsSet($_SESSION["usn"])){
		$name=$_SESSION["stu_name"];
		$_SESSION=Array();
		session_destroy();
	}
	else if(IsSet($_SESSION["sta_id"])){
		$name=$_SESSION["sta_name"];
		$_SESSION=Array();
		session_destroy();
	}
	else{
		header("location: ../index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hostel: Logged Out</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/newAccount.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/logout.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">PES BOYS HOSTEL</h1></header>
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
	<h2><?php echo $name; ?> just logged out!</h2>
	<div id='bye-container'>
		<ul id='bye'>
			<li id="_1">G</li>
			<li id="_2">O</li>
			<li id="_3">O</li>
			<li id="_4">D</li>
			<li id="_5"> </li>
			<li id="_6">B</li>
			<li id="_7">Y</li>
			<li id="_8">E</li>
		</ul>
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