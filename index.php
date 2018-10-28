<?php
	session_start();
	if(IsSet($_SESSION["usn"])){
		$link1="<a href='pages/stu_profile.php'>".$_SESSION["stu_name"]."</a>";		
		$link2="<a href='pages/stu_profile.php'>".$_SESSION["stu_name"]."</a>";		
	}
	else if(IsSet($_SESSION["sta_id"])){
		$link1="<a href='pages/sta_profile.php'>".$_SESSION["sta_name"]."</a>";		
		$link2="<a href='pages/sta_profile.php'>".$_SESSION["sta_name"]."</a>";	
	}
	else{
		$link1="<a href='pages/stu_login.php'>"."Student LogIn"."</a>";		
		$link2="<a href='pages/sta_login.php'>"."Staff LogIn"."</a>";	
		$_SESSION=Array();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>
<div id="banner">
	<h1>PES Boys Hostel</h1>
</div>
<nav>
	<ul>
		<li><a href="pages/gallery_home.php">Gallery</a></li>
		<li><a href="pages/rules.php">Norms and Rules</a></li>
		<li><a href="pages/registration.php">Join The Hostel</a></li>
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
<div id="nav">
	<ul>
		<li><a href="pages/about.php">
		<h2>About</h2>
		<div class='outline'>
		<p>A short video on the hostel itself, displaying and highlighting the various parts of the hostel.</p>
		<p>A detailed summary on the pre-requisites for joining the hostel from local guardian requirements to the disciplinary expectations even beyond the primary rules and regulations.</p>
		<p>A basic framework outlining hostel and college procedures from a hostelites perspective.</p>
		<p>A short guideline stating the advantages of joining the hostel from peer-peer help and healthy interaction, all the way to easier access and closeness to college proceedings and facilities .</p>
		<p>Click here to view these details.</p>
		</div>
		</a></li>
		<li><a href="pages/facilities.php">
		<h2>Facilities</h2>
		<div class='outline'>
		<p>This Section highlights the various facilities provided by the Hostel</p>
		<p>From in-house facilities like laundry services and bi-weekly room cleaning, to extra-curricular facilites like a top of the line gym, and a table-tennis table. </p>
		<p>The Hostel also provides a selection of three Food Messes which can be selected from by the students on a monthly basis.</p>
		<p>Emergeny Services like an on-call doctor and ambulance services are also present.</p>
		<p>Click here to read further and in far more detail about the exquisite array of facilities this hostel provides.</p>
		</div>
		</a></li>
		<li><a href="pages/announcements.php">
		<h2>Announcements</h2>
		<div class='outline'>
		<p>Click here to view the latest announcements from the staff.</p>
		<p>All Students are reminded to check these announcements on a weekly basis to not miss out on any important activity or changes held by or made by the hostel authorities.</p>
		<p>The Hostel is not responsible for any announcement a hostelite misses out on because of failing to do so.</p>
		</div>
		</a></li>
		<li><a href="pages/reviews.php">
		<h2>Reviews</h2>
		<div class='outline'>
		<p>View the various reviews and feedback that the hostel has gotten, directly from those that matter the most, the students staying themselves!</p>
		<p>Get direct unadultered insight into what these students have to say and you shall see just how beneficial the hostel is.</p>
		<p>Be sure to join! and if so, Review too!!</p>
		</div>
		</a></li>
		<li><a href="pages/map.php">
		<h2>Map And Details</h2>
		<div class='outline'>
		<p>This page is a map of the boys hostel, as shown on Google Maps. It shows both the hostel area's inner map and surrounding areas as well.</p>
		<p>Click here to view it!</p>
		</div>
		</a></li>
	</ul>
</div>

<footer>
	<ul>
		<li><a href='pages/about_us.php'>About Us</a></li>
		<li><a href='#'>F.A.Q</a></li>
		<li><a href='pages/anti_ragging.php'>Anti-Ragging Policy</a></li>
		<li><a href='pages/contact.php'>Contact</a></li>
	</ul>
	<p>&copy All Rights Reserved</p>
	<p>Parent site: www.pes.edu</p>
</footer>
</body>
</html>