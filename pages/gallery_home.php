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
	<title>Hostel: Gallery</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/gallery.css">
</head>
<body>
<header>
	<div id="page-name">
		<h1><img src="../assets/images/pes-university.png" alt="PES BOYS HOSTEL">Hostel Blocks Gallery</h1>
	</div>
</header>
<nav>
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="rules.php">Norms and Rules</a></li>
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

<!-- <div class="pic-container" id="nbx-pics">
	<div id="pic-nav">
		<ul>
			<li><button name="one" class="active">Page 1</button></li>
			<li><button name="two">Page 2</button></li>
			<li><button name="three">Page 3</button></li>
			<li><button name="four">Page 4</button></li>
		</ul>
	</div>
	<div class="page onscreen" id="page-one">
		<div class="arrow-block left-block" ><i class="arrowcon fa fa-5x fa-chevron-circle-left" id="left-arrow-one" aria-hidden="true"></i></div>
		<div><img src="https://source.unsplash.com/PZUK6B5Ia3I"></div>
		<div class="arrow-block right-block" ><i class="arrowcon fa fa-5x fa-chevron-circle-right" id="right-arrow-one" aria-hidden="true"></i></div>
	</div>
	<div class="page" id="page-two">
		<div class="arrow-block left-block" ><i class="arrowcon fa fa-5x fa-chevron-circle-left" id="left-arrow-two" aria-hidden="true"></i></div>
		<div><img src="https://source.unsplash.com/bQl2kRQyUE8"></div>
		<div class="arrow-block right-block" ><i class="arrowcon fa fa-5x fa-chevron-circle-right" id="right-arrow-two" aria-hidden="true"></i></div>
	</div>
	<div class="page" id="page-three">
		<div class="arrow-block left-block"><i class="arrowcon fa fa-5x fa-chevron-circle-left" id="left-arrow-three" aria-hidden="true"></i></div>
		<div><img src="https://source.unsplash.com/IzWePU8aQBc"></div>
		<div class="arrow-block right-block"><i class="arrowcon fa fa-5x fa-chevron-circle-right" id="right-arrow-three" aria-hidden="true"></i></div>
	</div>
	<div class="page" id="page-four">
		<div class="arrow-block left-block"><i class="arrowcon fa fa-5x fa-chevron-circle-left" id="left-arrow-four" aria-hidden="true"></i></div>
		<div><img src="https://source.unsplash.com/PZUK6B5Ia3I"></div>
		<div class="arrow-block right-block"><i class="arrowcon fa fa-5x fa-chevron-circle-right" id="right-arrow-four" aria-hidden="true"></i></div>
	</div>
</div> -->
<div id="gallery-list">
	<div class="gallery-container">
		<h2>NBX</h2><div class="view-button-container"><button class="gallery_viewer" id="view_nbx">VIEW GALLERY</button></div>	
		<div class="clearing"></div>
	</div>

	<div class="gallery-container">
		<h2>NB</h2><div class="view-button-container"><button class="gallery_viewer" id="view_nb">VIEW GALLERY</button></div>
		<div class="clearing"></div>
	</div>
	<div class="gallery-container">
		<h2>IH</h2><div class="view-button-container"><button class="gallery_viewer " id="view_ih">VIEW GALLERY</button></div>
		<div class="clearing"></div>
	</div>
	<div class="gallery-container">
		<h2>MM</h2><div class="view-button-container"><button class="gallery_viewer " id="view_mm">VIEW GALLERY</button></div>
		<div class="clearing"></div>
	</div>
	<div class="gallery-container">
		<h2>MESS</h2><div class="view-button-container"><button class="gallery_viewer " id="view_mess">VIEW GALLERY</button></div>
		<div class="clearing"></div>
	</div>
	<div class="gallery-container">
		<h2>IT</h2><div class="view-button-container"><button class="gallery_viewer " id="view_it">VIEW GALLERY</button></div>
		<div class="clearing"></div>		
	</div>
</div>
<div class="pic-container" id="nbx-pics">
	<div id="pic-header">
		<h2>XXXX Gallery</h2>
		<button id="close-gallery">X</button>
	</div>
	<!-- <div id="pic-nav">
		<ul>
			<li><button name="one" class="active">Page 1</button></li>
			<li><button name="two">Page 2</button></li>
			<li><button name="three">Page 3</button></li>
			<li><button name="four">Page 4</button></li>
		</ul>
	</div> -->
	<div class="page onscreen" id="page-one">
		<div class="arrow-block left-block" ><span class="arrowcon icon-left" id="left-arrow-one"><</span></div>
		<div><img src="../assets/images/Blocks/IH/IMG_1.jpg"></div>
		<div class="arrow-block right-block" ><span class="arrowcon icon-right" id="right-arrow-one">></span></div>
	</div>
	<div class="page" id="page-two">
		<div class="arrow-block left-block" ><span class="arrowcon icon-left" id="left-arrow-two"><</span></div>
		<div><img src="../assets/images/Blocks/IH/IMG_2.jpg"></div>
		<div class="arrow-block right-block" ><span class="arrowcon icon-right" id="right-arrow-two">></span></div>
	</div>
	<div class="page" id="page-three">
		<div class="arrow-block left-block"><span class="arrowcon icon-left" id="left-arrow-three"><</span></div>
		<div><img src="../assets/images/Blocks/IH/IMG_3.jpg"></div>
		<div class="arrow-block right-block"><span class="arrowcon icon-right" id="right-arrow-three">></span></div>
	</div>
	<div class="page" id="page-four">
		<div class="arrow-block left-block"><span class="arrowcon icon-left" id="left-arrow-four"><</span></div>
		<div><img src="../assets/images/Blocks/IH/IMG_4.jpg"></div>
		<div class="arrow-block right-block"><span class="arrowcon icon-right" id="right-arrow-four">></span></div>
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
<script src="../assets/js/gallery.js"></script>
</body>
</html>