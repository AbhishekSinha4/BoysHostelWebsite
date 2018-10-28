<?php
	session_start();
	if(IsSet($_SESSION["usn"])){
		$link1="<a href='stu_profile.php'>".$_SESSION["stu_name"]."</a>";		
		$link2="<a href='stu_profile.php'>".$_SESSION["stu_name"]."</a>";		
	}
	else if(IsSet($_SESSION["sta_id"])){
		$link1="<a href='sta_profile.php'>".$_SESSION["sta_name"]."</a>";		
		$link2="<a href='sta_profile.php'>".$_SESSION["sta_name"]."</a>";	
	}
	else{
		$link1="<a href='stu_LogIn.php'>"."Student LogIn"."</a>";		
		$link2="<a href='sta_LogIn.php'>"."Staff LogIn"."</a>";	
		$_SESSION=Array();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hostel: Map</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/announcements.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/map.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">PES BOYS HOSTEL</h1></header>
	<nav>
		<ul>
			<li><a href="gallery_home.php">Gallery</a></li>
			<li><a href="../index.php">Home</a></li>
			<li><a href="registration.php">Join The Hostel</a></li>
		</ul>
		<ul id="sign-in">
		<?php 
			if(strcmp($link1,$link2)===0){
				echo "<li>$link1</li>";
			}
			else{
				echo 
				"<li> $link1 </li>
				<li> $link2 </li>";
			}
		?>
		</ul>
	</nav>
	<h2>Map: </h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.1533190157256!2d77.53446754778854!3d12.933439405282556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e465f7bbdc1%3A0xa202c4b00317d086!2sPES+Boys+hostel!5e0!3m2!1sen!2sin!4v1510634537892" width="600" height="450" frameborder="0" allowfullscreen></iframe>
	<p>PES Boys Hostel, PES University, 100ft Ring Road, Banashankari III Stage, Bengaluru-560 085</p>
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