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
	<title>Hostel: Contact Us</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/contact.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">Contact Us</h1></header>
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
	<div id="parent-container">
		<div id="container">
			<h2>Get In Touch...</h2>
			<div class='col1'><p>Phone Number 1:</p></div>
			<div class='col2'><p>080 2672 1983</p></div>
			<div class='col1'><p>Phone Number 2:</p></div>
			<div class='col2'><p>080 2672 2108</p></div>
			<div class='col1'><p>Email:</p></div>
			<div class='col2'><p>pesboyshostel@pes.edu</p></div>
			<div class='col1'><p>Fax:</p></div>
			<div class='col2'><p>926383638363</p></div>
		</div>
		<div id="address-container">
			<div class='col1' id='address'><p>Address:</p></div>
			<div class='col2' id='pes-address'><p>100 Feet Ring Road, BSK III Stage, Hoskeralli, Bengaluru - 560 085</p></div>
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
