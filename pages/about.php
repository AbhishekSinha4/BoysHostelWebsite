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
	<title>Hostel: About</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/about.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">About The Hostel</h1></header>
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
	
	<div id="container">
		<div id='column-1'>
			<div id='at-a-glance'>
				<h2>TIPS AT GLANCE</h2>	
				<ul>
					<li>Contact Boys Hostel office.</li>
					<li>Hostel persons will assist you in taking round the Hostel facility.</li>
					<li>Visit Rooms in the Blocks ear-marked for Fresher’s getting admitted to 1st year of PhD/ PG/UG/PU/Diploma programs in PES Institutions.</li> 
					<li>If satisfied and desires to seek Hostel accommodation, go ahead with the subsequent Procedure</li>
				</ul>
			</div>
			<div id="quick-procedure">
				<h2>ADMISSION PROCEDURE  AT GLANCE</h2>
				<ul>
					<li>Step 1. Introduction of the Local Guardian [LG] to Warden/Asst Manager</li>
					<li>Step 2. To Register && Attend the Briefing session.</li>
					<li>Step 3. Submission of filled Hostel application form along with all enclosures.</li>
					<li>Step 4 . Payment of Hostel fee.</li>
				</ul>
			</div>	
		</div>
		<div id='column-2'>
			<div id='video-container'>
				<h2>A BRIEF VIDEO TOUR</h2>
				<video src="../assets/videos/hostelVid.mp4" controls></video>
			</div>
			<div id='local-guardian'>
				<h2>LOCAL GUARDIAN</h2>
				<ul>
					<li>A LG, aged 35 Years or more, is a must. </li>
					<li>The LG should know English.</li>
					<li>Parents have to identify a proper LG. </li>
					<li>The Identified LG should be introduced to the Warden.</li>
					<li>If approved as acceptable by the Warden, procede further.</li>
					<li>Student, Parent and the Local Guardian should necessarily attend the Briefing session.</li>
					<li>Should register at the Hostel office a convenient available date</li>
					<li>All 3 should arrive 10 min. prior to start.</li>
				</ul>
			</div>
		</div>
		<div id="clearing"></div>
		<div id="poi">
			<h2>POINTS OF NOTE</h2>
			<ul>
				<li>Get Hostel Application form by paying Rs.100 after the Briefing session.</li>
				<li>To be paid only through DD drawn in favor of “PESIT Hostel”, payable at Bengaluru after which an 'Acknowledgement form will be given.</li>
				<li>Just procuring the DD does not guarantee a seat in the hostel.</li>
				<li>The LG is to be necessarily present during all hostel admission proceedings.</li>
				<li>Hostel Proceedings might take 2-3 days time and all participants are advised to not hasten the process.</li>
				<li>Room Preferences are given on a first come, first serve basis.</li>
				<li>Students can check in at most 3 days before the start of the colege term.</li>
				<li>Due to late entry, queues might be long. To avoid this students are advised to come a bit early.</li>
				<li>For check-in to the hostel do not forget to bring 'Acknowledgement ' of admission, 1 door lock and 3 keys for the door, and 1 lock and key for their wardrobe.</li>
			</ul>
		</div>
		<div id="advantages">
			<h2>BENEFITS OF THE HOSTEL</h2>
			<li>This hostel provides a congenial atmosphere for study. Serious students learn many good things in the hostel.</li>

			<li>There is a fixed time for everything. The students have to give their attendance by 9:30. They are to do everything according to the timetable. This inculcates discipline in the student which helps in development of the student.</li>

			<li>The students have to lead a disciplined life and they learn regularity and punctuality which helps in development of the student.</li>

			<li>In the hostel, students can approach other students to clarify their doubts which increases group studies.</li>

			<li>They can also borrow books from one another and from the library which is fully open for students until 10:30 in the night.</li>

			<li>In the hostel, the students learn many useful lessons of life. They have to do everything for themselves. This creates in them the habit of self-reliance.</li>

			<li>The hostel helps students to learn how to manage a room and spend money carefully as you have to be independent about expenditure. Therefore, hostel-life is a preparation for the domestic life later.</li>

			<li>Students of the same age generally live in such places. Therefore, they learn to have regard for others, to live with others and to help one another in times of need. Hostel life thus help to develop in students a sense of fellow feeling.</li>

			<li>While living away from parents can be hard initially, PES hostel makes sure the students are secure and also ensure that the student learns to live his own life without having to depend on others.</li>
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
