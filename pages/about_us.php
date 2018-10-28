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
	<title>Hostel: About the Creators</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/about_us.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">About the Staff!</h1></header>
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
	<h2>Meet The Team...</h2>
	<div class="team" id="pandey">
		<div id="profile-circle">
			<div id="profile-pic-wrapper">
				<img id="profile-pic" src="../assets/images/Profile/pandey.jpg">
			</div>
		</div>
		<div class="text">
			<h2>EMPLOYEE-1</h2>
			<h3>Aditya Pandey</h3>
			<p>01FB16ECS029</p>
		</div>
	</div>
	<div class="team" id="abhishek">
		<div id="profile-circle">
			<div id="profile-pic-wrapper">
				<img id="profile-pic" src="../assets/images/Profile/abhishek.jpg">
			</div>
		</div>
		<div class="text">
			<h2>WARDEN-1</h2>
			<h3>Abhishek Sinha</h3>
			<p>01FB16ECS014</p>
		</div>
	</div>
	<div class="team" id="akash">
		<div id="profile-circle">
			<div id="profile-pic-wrapper">
				<img id="profile-pic" src="../assets/images/Profile/akash.jpg">
			</div>
		</div>
		<div class="text">
			<h2>EMPLOYEE-2</h2>
			<h3>Akash Bhat</h3>
			<p>01FB16ECS038</p>
		</div>
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