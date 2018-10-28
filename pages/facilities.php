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
	<title>Hostel: Facilities</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/facilities.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">PES Boys Hostel: Facilities Provided</h1></header>
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
	<div id="facilities">


		<div id="hm" class="amenities">
			<div class="front">
				<h2>Hostel Mess</h2>
			</div>
			<div class="back">
				<p>One of the 3 prestigious messes of the PES Boys Hostel, the Hostel Mess is a south indian mess, that serves a wide array of food, including non-veg on Wednesdays and Thursdays.
				It also includes a hostel bakery/mart from where you can buy food, and which is open throughout the day till 10:30 PM each day, and 1:30 AM on exam days.</p>
			</div>
		</div>
		<div id="ar" class="amenities">
			<div class="front">
				<h2>Aman Rasoi</h2>
			</div>
			<div class="back">
				<p>One of the 3 prestigious messes of the PES Boys Hostel, Aman Rasoi, or Namdhari Foods, is a North Indian Mess that serves a wide array of food, but is purely vegetarian. It also has a to-order menu available during dinner hours, and serves juices, etc. during later hours.</p>
			</div>
		</div>
		<div id="fc" class="amenities">
			<div class="front">
				<h2>Food Court</h2>
			</div>
			<div class="back">
				<p>One of the 3 prestigious messes of the PES Boys Hostel, the Food Court, is a multicuisined food stop that serves a wide array of food and works on a coupon system. It also has a small shop wherein are available a range of snacks and juices, from sandwiches to lime juice.</p>
			</div>
		</div>
		

		<div id="fball" class="amenities">
			<div class="front">
				<h2>Football</h2>
			</div>
			<div class="back">
				<p>The college has multiple grounds, out of which one is the football turf, that can be used to play five on five to seven on seven games. This turf is well maintained and ripe to play on.</p>
			</div>
		</div>
		<div id="cricket" class="amenities">
			<div class="front">
				<h2>Cricket</h2>
			</div>
			<div class="back">
				<p>The college has multiple grounds, out of which one is the cricket ground, that is one of the best cricket grounds in Bangalore. This ground is well maintained and ripe to play on.</p>
			</div>
		</div>
		<div id="bball" class="amenities">
			<div class="front">
				<h2>Basketball</h2>
			</div>
			<div class="back">
				<p>The college Basket ball court, is open at all times for hostelites to play on. You will often find many/some of these students having a good time in this area.</p>
			</div>
		</div>


		<div id="gym" class="amenities">
			<div class="front">
				<h2>Gym</h2>
			</div>
			<div class="back">
				<p>The gym has the latest equipment aided by trainers and physiotherapists for guided exercise for students and staff. The hostelites are again in the perfect position to reap full benefits of this wonderous service/facility.</p>
			</div>
		</div>
		<div id="meeting" class="amenities">
			<div class="front">
				<h2>Meeting/Discussion Room</h2>
			</div>
			<div class="back">
				<p>The cellar in the office block of the hostel, is a large hall, with a couple of discussion rooms that students can use to discuss academia. This hall is often used for announcements, food coupon distribution, etc.</p>
			</div>
		</div>
		<div id="library" class="amenities">
			<div class="front">
				<h2>Library</h2>
			</div>
			<div class="back">
				<p>The PES library is one of the best student libraries in Bangalore, and the hostelites are irmly in place to take full advantage of this amazing facility. The library is open for long hours, and the hostelites are free to visit/use it during those hours.</p>
			</div>
		</div>
		

		<div id="bakery" class="amenities">
			<div class="front">
				<h2>Night Cafe</h2>
			</div>
			<div class="back">
				<p>The Night Cafe, is an active part of the hostel early nightlife, it serves everything from tea to shakes. A variety of snacks are also available. Open till 11 PM on regular days, and till 1:30 AM on pre-exam nights.</p>
			</div>
		</div>
		<div id="laundry" class="amenities">
			<div class="front">
				<h2>Laundry</h2>
			</div>
			<div class="back">
				<p>The Hostel laundry is open to every hostel student, however each student has 2 allotted days on which he can give/recieve laundry from the appointed authorities.</p>
			</div>
		</div>
		<div id="tt" class="amenities">
			<div class="front">
				<h2>Table Tennis</h2>
			</div>
			<div class="back">
				<p>The hostel has two table tennis tables, for the students to enjoy in their recreational time as they take a break from their studies. The tables are present next to the meeting room.</p>
			</div>
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