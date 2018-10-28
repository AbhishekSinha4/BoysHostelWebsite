<?php

$conn=mysqli_connect('localhost','abhishek','abhishek98');
$db='pes_boys_hostel';
mysqli_select_db($conn,$db);

$query="insert into students (usn, passw, stu_name, stu_dob, stu_email, stu_number, stu_address, stu_course, p_name, p_email, p_number, p_address, g_name, g_email, g_number, g_address) values ('".strtoupper($_POST['usn'])."', '".$_POST['passw']."', '".ucwords(strtolower($_POST['stu_name']))."', '".$_POST['stu_dob']."', '".$_POST['stu_email']."', '".$_POST['stu_number']."', '".$_POST['stu_address']."', '".$_POST['stu_course']."', '".ucwords(strtolower($_POST['p_name']))."', '".$_POST['p_email']."', '".$_POST['p_number']."', '".$_POST['p_address']."', '".ucwords(strtolower($_POST['g_name']))."', '".$_POST['g_email']."', '".$_POST['g_number']."', '".$_POST['g_address']."');";

$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel: Welcome <?php echo $_POST['stu_name']?></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/newAccount.css">
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
	<h2>Welcome <?php echo $_POST['stu_name']?>!!!<br> You have registered!!! <br>You are free to LogIn now.<br>Pay the fee within a month please!</h2>
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