<?php
	session_start();
	if(Isset($_SESSION["usn"])){
	}
	else{
		session_destroy();
		header("location: stu_login.php");
	}

	$revmessage="";
	$revstatus="none";
	$revsuccess="";

	if($_SERVER["REQUEST_METHOD"]==="POST"){
		if(IsSet($_POST["review"])){
			if(strlen($_POST["review"])===0)$revmessage="Empty Review. No Review was made.";
			else if(preg_match("/\"/",$_POST["review"])){
				$revmessage="Invalid character ' \" '. No Review was made.";
			}
			else{
				$conn=mysqli_connect('localhost','abhishek','abhishek98');
				$db='pes_boys_hostel';
				mysqli_select_db($conn,$db);

				$query="insert into reviews (review_content,review_stu) values (\"".ucwords(strtolower($_POST["review"]))."\",\"".$_SESSION["stu_name"]."\");";
				$result=mysqli_query($conn,$query);
				$revmessage="Review was made!!!";
				$revsuccess="success";
			}
			$revstatus="block";

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION["stu_name"];?> Profile</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/stu_profile.css">
</head>
<body>
<nav>
	<ul>
		<li><a href="gallery_home.php">Gallery</a></li>
		<li><a href="../index.php">Home</a></li>
		<li><a href="rules.php">Norms and Rules</a></li>
	</ul>
	<ul id="sign-in">
		<li><a href="logout.php">Log Out</a></li>
	</ul>
</nav>
<div id="container">
	<!-- <div id="profile-circle">
		<div id="profile-pic-wrapper">
			<img id="profile-pic" src="C:\Users\sunri\Pictures\Scuba Bali\24-06-2017\GOPR1095.jpg">
		</div>
	</div> -->
	<h1><?php echo $_SESSION["stu_name"]?></h1>
	<div class="table-container">
		<h2>Student</h2>
		<table>
			<tbody>
				<tr>
					<td class="details">Name</td>
					<td class="input"><?php echo $_SESSION["stu_name"]?></td>
				</tr>
				<tr>
					<td class="details">USN</td>
					<td class="input"><?php echo $_SESSION["usn"]?></td>
				</tr>
				<tr>
					<td class="details">Contact No.</td>
					<td class="input"><?php echo $_SESSION["stu_number"]?></td>
				</tr>
				<tr>
					<td class="details">Email</td>
					<td class="input"><?php echo $_SESSION["stu_email"]?></td>
				</tr>
				<tr>
					<td class="details">Address</td>
					<td class="input"><?php echo $_SESSION["stu_address"]?></td>
				</tr>

			</tbody>
		</table>
	</div>
	<div class="table-container">
		<h2>Parent</h2>
		<table>
			<tbody>
				<tr>
					<td class="details">Name</td>
					<td class="input"><?php echo $_SESSION["p_name"]?></td>
				</tr>
				<tr>
					<td class="details">Contact No.</td>
					<td class="input"><?php echo $_SESSION["p_number"]?></td>
				</tr>
				<tr>
					<td class="details">Email</td>
					<td class="input"><?php echo $_SESSION["p_email"]?></td>
				</tr>
				<tr>
					<td class="details">Address</td>
					<td class="input"><?php echo $_SESSION["p_address"]?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="table-container">
		<h2>Local Guardian</h2>
		<table>
			<tbody>
				<tr>
					<td class="details">Name</td>
					<td class="input"><?php echo $_SESSION["g_name"]?></td>
				</tr>
				<tr>
					<td class="details">Contact No.</td>
					<td class="input"><?php echo $_SESSION["g_number"]?></td>
				</tr>
				<tr>
					<td class="details">Email</td>
					<td class="input"><?php echo $_SESSION["g_email"]?></td>
				</tr>
				<tr>
					<td class="details">Address</td>
					<td class="input"><?php echo $_SESSION["g_address"]?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<button id='review'>Give Review/Feedback</button>
	<div id='review-form-container'>
		<form action='stu_profile.php' method='POST'>
			<textarea name='review' placeholder='Review/Feedback'></textarea>
			<button id="submit">Submit</button>
		</form>
		<button id='hide'>Hide</button>
	</div>
	<?php
	echo "<p id='message_rev' class='message ".$revsuccess."' style='display: ".$revstatus."'>".$revmessage."</p>";
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
<script type="text/javascript" src='../assets/js/stu_profile.js'></script>
</body>
</html>