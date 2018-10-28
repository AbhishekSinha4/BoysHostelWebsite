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
	<title>Hostel: Rules</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/rules.css">
</head>
<body>
	<header>
		<div id="page-name">
			<h1><img src="../assets/images/pes-university.png" alt="PES BOYS HOSTEL">PES Boys Hostel</h1>
		</div>
	</header>
	<nav>
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li><a href="gallery_home.php">Gallery</a></li>
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
	<div id='container'>
	<?php
	$f=file("../assets/dataFiles/MyRules.txt");
	echo "<h1>".$f[0]."</h1>";
	for($i=3;$i<sizeof($f);$i++){
		echo "<br />";
		if(preg_match('/^([0-9]\))/',$f[$i])){
			echo "<h2>".$f[$i]."</h2>";
			$i++;
		}
		if(preg_match('/^([0-9]\.[0-9])/',$f[$i])){
			echo "<h3>".$f[$i]."</h3>";
			$i++;
		}
		echo "<p>".$f[$i]."</p>";
	}
	echo "</p>";
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