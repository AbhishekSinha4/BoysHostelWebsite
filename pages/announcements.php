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
	<title>Hostel: Announcements</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/announcements.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">Hostel Announcements</h1></header>
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
	<div id="content">
	<?php
		$db='pes_boys_hostel';
		$conn=mysqli_connect('localhost','abhishek','abhishek98');

		mysqli_select_db($conn,$db);
		$query="select * from announcements;";
		$result=mysqli_query($conn,$query);
		if($result->num_rows===0){
			echo "<h1>No Announcements</h1>";
		}
		for($i=0;$i<$result->num_rows;$i++){
			$row=mysqli_fetch_assoc($result);
			echo
			"
				<div class='announcement'>
				<h1>".$row['title']."</h1>
				<p>".$row['content']."</p>
				</div>

			";
		}
		?>
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
