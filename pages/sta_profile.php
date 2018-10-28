<?php
	session_start();
	if(Isset($_SESSION["sta_id"])){
	}
	else{
		session_destroy();
		header("location: sta_login.php");
	}
	$annmessage="";
	$delmessage="";
	$addmessage="";
	$givepmessage="";
	$annstatus="none";
	$delstatus="none";
	$addstatus="none";
	$givepstatus="none";
	$annsuccess="";
	$delsuccess="";
	$addsuccess="";
	$givepsuccess="";


	if($_SERVER["REQUEST_METHOD"]==="POST"){
		if(IsSet($_POST["title"])){
			if(strlen($_POST["content"])===0)$annmessage="No Announcement was made.";
			else if(preg_match("/\"/",$_POST["content"])||preg_match("/\"/",$_POST["title"])){
				$annmessage="Invalid character ' \" '. No Announcement was made.";
			}
			else{
				$conn=mysqli_connect('localhost','abhishek','abhishek98');
				$db='pes_boys_hostel';
				mysqli_select_db($conn,$db);

				$query="insert into announcements (title,content) values (\"".ucwords(strtolower($_POST["title"]))."\",\"".$_POST["content"]."\");";
				$result=mysqli_query($conn,$query);
				$annmessage="Announcement was made!!!";
				$annsuccess="success";
			}
			$annstatus="block";

		}
		if(IsSet($_POST["del_title"])){
			if(!preg_match("/\"/",$_POST["content"])){
				$db='pes_boys_hostel';
				$conn=mysqli_connect('localhost','abhishek','abhishek98');
				mysqli_select_db($conn,$db);
				$query="select * from announcements where title=\"".ucwords(strtolower($_POST["del_title"]))."\";";
				$result=mysqli_query($conn,$query);
				if($result->num_rows==0)$delmessage="Announcement Doesn't Exist";
				else{
					$row=mysqli_fetch_assoc($result);
					
					$query="delete from announcements where title=\"".ucwords(strtolower($_POST["del_title"]))."\";";
					$result=mysqli_query($conn,$query);
					$delmessage="Announcement Deleted!!!";
					$delsuccess="success";
				}
			}
			else{
					$delmessage="Invalid character ' \" '. No Deletion.";
			}
			$delstatus="block";
		}
		if(IsSet($_POST["sta_id"])){
			if(strtolower($_POST["sta_id"])!=="warden1" && strtolower($_POST["sta_id"])!==strtolower($_SESSION["sta_id"])){
				$conn=mysqli_connect('localhost','abhishek','abhishek98');
				$db='pes_boys_hostel';
				mysqli_select_db($conn,$db);
				$query="insert into staff (sta_id, sta_passw, sta_name, sta_dob, sta_doj, sta_email, sta_number, sta_address,can_ann,can_del,can_add,can_givep) values ('".strtoupper($_POST['sta_id'])."', '".$_POST['sta_passw']."', '".ucwords(strtolower($_POST['sta_name']))."', '".$_POST['sta_dob']."', '".$_POST['sta_doj']."', '".$_POST['sta_email']."', '".$_POST['sta_number']."', '".$_POST['sta_address']."', ".$_POST['can_ann'].", ".$_POST['can_del'].", ".$_POST['can_add'].", ".$_POST['can_givep'].");";
				$result=mysqli_query($conn,$query);
				$addmessage="Account has been created Successfully!";
				$addsuccess="success";
			}
			else if(strtolower($_POST["sta_id"])!=="warden1"){
				$addmessage="Can't create your own account. Already Present.";
			}
			else{
				$addmessage="Can't create Primary Warden account. Already Present.";
			}
			$addstatus="block";
		}
		if(IsSet($_POST["sta_tbe_id"])){
			if(strtolower($_POST["sta_tbe_id"])!=="warden1" && strtolower($_POST["sta_tbe_id"])!==strtolower($_SESSION["sta_id"])){

				$db='pes_boys_hostel';
				$conn=mysqli_connect('localhost','abhishek','abhishek98');
				mysqli_select_db($conn,$db);

				$query="select * from staff where sta_id='".strToUpper($_POST["sta_tbe_id"])."';";
				$result=mysqli_query($conn,$query);
				if($result->num_rows==0)
					$givepmessage="<p>Staff Member Doesn't Exist.</p>";
				else{
					$query="update staff set can_ann=".$_POST["can_ann"].", can_del=".$_POST["can_del"].", can_add=".$_POST["can_add"].", can_givep=".$_POST["can_givep"]." where sta_id='".$_POST["sta_tbe_id"]."';";

					$result=mysqli_query($conn,$query);
					$givepmessage="Privileges Edit Successful!";
					$givepsuccess="success";

				}
			}
			else if(strtolower($_POST["sta_tbe_id"])!=="warden1"){
				$givepmessage="Can't edit your own account privileges. Ask the Warden to help.";
			}
			else{
				$givepmessage="Can't edit Primary Warden privileges. Full access.";
			}
			$givepstatus="block";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION["sta_name"];?> Profile</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/sta_profile.css">
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
	<h1><?php echo $_SESSION["sta_name"]?></h1>
	<div class='table-container'>
		<h2>Employee Account Details</h2>
		<table>
			<tbody>
				<tr>
					<td class="details">Name</td>
					<td class="input"><?php echo $_SESSION["sta_name"]?></td>
				</tr>
				<tr>
					<td class="details">Staff ID</td>
					<td class="input"><?php echo $_SESSION["sta_id"]?></td>
				</tr>
				<tr>
					<td class="details">Contact No.</td>
					<td class="input"><?php echo $_SESSION["sta_number"]?></td>
				</tr>
				<tr>
					<td class="details">Email</td>
					<td class="input"><?php echo $_SESSION["sta_email"]?></td>
				</tr>
				<tr>
					<td class="details">Address</td>
					<td class="input"><?php echo $_SESSION["sta_address"]?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div id="privileges">
	<h2>Would You Like To:</h2>
	<?php 
		if($_SESSION["can_ann"]){
			echo 
			"
			<div class='cmd_container' id='container_ann'>
			<button class='cmd_btn' id='ann'>Make an announcement?</button>
			<div class='container_form' id='container_form_ann'>
			<form id='form_ann' action='sta_profile.php' method='POST'>
				<input type='text' name='title' placeholder='Enter Subject'>
				<textarea name='content' placeholder='Enter Announcement (max 400 characters.)' maxlength='400' rows='5'></textarea>
				<input type='submit'>
			</form>
			<button class='hide_btn' id='hide_btn_ann'>Hide</button>
			</div>
			<p id='message_ann' class='message ".$annsuccess."' style='display: ".$annstatus."'>".$annmessage."</p>
			</div>
			";
		}
		if($_SESSION["can_del"]){
			echo 
			"
			<div class='cmd_container' id='container_del'>
			<button class='cmd_btn' id='del'>Delete an announcement?</button>
			<div class='container_form' id='container_form_del'>
			<form id='form_del' action='sta_profile.php' method='POST'>
				<input type='text' name='del_title' placeholder='Enter Subject to be Deleted'>
				<input type='submit' value='Delete'>
			</form>
			<button class='hide_btn' id='hide_btn_del'>Hide</button>
			</div>
			<p id='message_del' class='message ".$delsuccess."' style='display: ".$delstatus."'>".$delmessage."</p>
			</div>
			";
		}
		if($_SESSION["can_add"]){
			echo 
			"
			<div class='cmd_container' id='container_add'>
			<button class='cmd_btn' id='add'>Add a Staff Member?</button>
			<div class='container_form' id='container_form_add'>
			<form id='form_add' action='sta_profile.php' method='POST'>
				<p>New Staff ID:</p>
				<input type='text' id='sta_id' name='sta_id' placeholder='Enter New Staff id'>
				<p>Password:</p>
				<input type='password' name='sta_passw' id='sta_passw' placeholder='Enter Password'>
				<p id='sta_passw-status'>Empty</p>
				<p>Confirm Password:</p>
				<input type='password' name='sta_c_passw' id='sta_c_passw' placeholder='Confirm Password'>
				<p>New Staff Name:</p>
				<input type='text' id='sta_name' name='sta_name' placeholder='Enter New Staff Name'>
				<p>Date Of Birth:</p>
				<input type='date' id='sta_dob' name='sta_dob'>
				<p>Date Of Joining:</p>
				<input type='date' id='sta_doj' name='sta_doj'>
				<p>Contact No.:</p>
				<input type='number' id='sta_number' name='sta_number' placeholder='Contact No.'>
				<p>Email ID:</p>
				<input type='text' id='sta_email' name='sta_email' placeholder='E-Mail ID'>
				<p>Address:</p>
				<textarea id='sta_address' name='sta_address' placeholder='Permanent Address'></textarea>
				<p>Can make Announcements?: </p>
					<input type='checkbox' name='can_ann' value=0 style='display:none' checked>
					<input type='checkbox' id='can_ann' name='can_ann' value=1>
				<p>Can Delete?: </p>
					<input type='checkbox' name='can_del' value=0 style='display:none' checked>
					<input type='checkbox' id='can_del' name='can_del' value=1>
				<p>Can add Staff?: </p>
					<input type='checkbox' name='can_add' value=0 style='display:none' checked>
					<input type='checkbox' id='can_add' name='can_add' value=1>
				<p>Can give Privileges?: </p>
					<input type='checkbox' name='can_givep' value=0 style='display:none' checked>
					<input type='checkbox' id='can_givep' name='can_givep' value=1>
				<input type='submit' id='submit_add' value='Add'>
			</form>
			<button class='hide_btn' id='hide_btn_add'>Hide</button>
			</div>
			<p id='message_add' class='message ".$addsuccess."' style='display: ".$addstatus."'>".$addmessage."</p>
			<div class='error-box' id='error-box-add'></div>
			</div>
			";
		}
		if($_SESSION["can_givep"]){
			echo 
			"
			<div class='cmd_container' id='container_givep'>
			<button class='cmd_btn' id='givep'>Edit Staff Member Privileges?</button>
			<div class='container_form' id='container_form_givep'>
			<form id='form_givep' action='sta_profile.php' method='POST'>
				<p>Staff ID:</p>
				<input type='text' name='sta_tbe_id' placeholder='Enter Staff id'>
				<p>Can make Announcements?: </p>
					<input type='checkbox' name='can_ann' value=0 style='display:none' checked>
					<input type='checkbox' id='can_ann' name='can_ann' value=1>
				<p>Can Delete?: </p>
					<input type='checkbox' name='can_del' value=0 style='display:none' checked>
					<input type='checkbox' id='can_del' name='can_del' value=1>
				<p>Can add Staff?: </p>
					<input type='checkbox' name='can_add' value=0 style='display:none' checked>
					<input type='checkbox' id='can_add' name='can_add' value=1>
				<p>Can give Privileges?: </p>
					<input type='checkbox' name='can_givep' value=0 style='display:none' checked>
					<input type='checkbox' id='can_givep' name='can_givep' value=1>
				<input type='submit' id='submit_givep' value='Give Privileges'>
			</form>
			<button class='hide_btn' id='hide_btn_givep'>Hide</button>
			</div>
			<p id='message_givep' class='message ".$givepsuccess."' style='display: ".$givepstatus."'>".$givepmessage."</p>
			<div class='error-box' id='error-box-givep'></div>
			</div>
			";
		}
	?>
</div>
<?php
if($_SESSION["sta_id"]==='WARDEN1'){
	echo "<div id='inbox-container'>
		  	  <button id='inbox-btn'><a href='inbox.php' target='_blank'>Go To Inbox >></a></button>
		  </div>";
}
?>

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
<script type="text/javascript" src="../assets/js/sta_profile.js"></script>
</body>
</html>