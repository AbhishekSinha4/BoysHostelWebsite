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
	<title>Hostel: Anti-Ragging</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/anti_ragging.css">
</head>
<body>
	<header><h1><img src="../assets/images/pes-university.png">Anti-Ragging Policy</h1></header>
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
		<h2>Ragging is a <span>PUNISHABLE OFFENSE</span>. Stay Away!</h2>	
		<p>The university community is aware of the fact that prevention and prohibition of ragging in institutions imparting higher education in the country is a great concern of all authorities including the law enforcing agencies. Regulations have been framed by various apex bodies of higher education in the country in order to root out ragging in all its forms in the universities and its affiliated colleges in the country by prohibiting it by enacting law too. In this context, the Report submitted by the Raghavan Committee constituted by the Hon’ble Supreme Court in SLP No.24295/2006 is relevant. Hon’ble Supreme Court of India accepted the various recommendations made by the Raghavan Committee and made it mandatory for the concerned to implement the following recommendations.</p>
		<ul>
			<li>The punishment to be meted out has to be exemplary and justifiably harsh to act as a deterrent against recurrence of such incidents.</li>
			<li>Every single incident of ragging where the victim or his parent/guardian or the Head of Institution is not satisfied with the institutional arrangement for action, a First Information Report must be filed without exception by the institutional authorities with the local police authorities. Any failure on the part of the institutional authority or negligence or deliberate delay in lodging the FIR with the local police shall be construed to be an act of culpable negligence on the part of the authorities by the Courts. All efforts should be made to ensure that cases involving ragging are taken up on priority basis to send the correct message that ragging is not only to be discouraged but also to be dealt with sternness.</li>
		</ul>
		<p>Hence, it is emphasized that ragging of and among students of this university in any form at any place will not be tolerated and it is banned. For this purpose the following activities and / or actions shall be construed as the forms of ragging.</p>
		<ul>
			<li>Ragging has several aspects with among others, psychological, social, political, economic, cultural, and academic dimensions.
			</li>
			<li>Any conduct by any student or students whether by words spoken or written or by an act which has the effect of teasing, treating or handling with rudeness a fresher or any other students.
			</li>
			<li>Indulging in rowdy or indisciplined activities by any student or students which causes or is likely to cause annoyance, hardship, physical or psychological harm or to raise fear or apprehension thereof in any fresher or any other student.
			</li>
			<li>Asking any student to do any act which such student will not do in the ordinary course and which has the effect of causing or generating a sense of shame or torment or embarrassment so as to adversely affect the physique or psyche on such fresher or any other student.
			</li>
			<li>Any act that prevents, disrupts or disturbs the regular academic activity of a student.
			</li>
			<li>Exploiting the services of a junior student for completing the academic tasks assigned to an individual or a group of seniors.
			</li>
			<li>Any act of financial extortion or forceful expenditure burden put on a junior student by senior students.
			</li>
			<li>Any act of physical abuse including all variants of it: sexual abuse, homosexual assaults, stripping, forcing obscene and lewd acts, gestures, causing bodily harm or any other danger to health or person.
			</li>
			<li>Any act or abuse by spoken words, emails, snail-mails, blogs, public insults including deriving perverted pleasure, vicarious or sadistic thrill from actively or passively participating in the discomfiture to others;
			</li>
			<li>Any act that affects the mental health and self-confidence of students.
			</li>
			<li>The human rights perspective of ragging which involves the injury caused to the fundamental right to human dignity through humiliation heaped on junior students by seniors; often resulting in the extreme step of suicide by the victims.
			</li>
		</ul>
		<p>The University will have an Anti Ragging Committee headed by a senior faculty of the University. If the committee finds that prima facie there is a case of ragging on the Complaint it received, the committee will take immediate action including the filing of FIR with the local police depending on the seriousness of the case.</p>
		<p>Depending upon the nature and gravity of the offence as established by the Anti-Ragging Committee of the University, the possible punishments for those found guilty of ragging at the University level shall be any one or any combination of the following:</p>
		<ul>
			<li>Cancellation of admission</li>
			<li>Suspension from attending classes</li>
			<li>Withholding/withdrawing scholarship/fellowship and other benefits</li>
			<li>Debarring from appearing in any test/examination or other evaluation process</li>
			<li>Withholding results</li>
			<li>Debarring from representing the institution in any regional, national or international meet, tournament, youth festival, etc.</li>
			<li>Suspension/expulsion from the hostel</li>
			<li>Rustication from the institution for a period as may be determined by appropriate authority</li>
			<li>Expulsion from the institution and consequent debarring from admission to any other institution of the University</li>
			<li>Fine of Rupees 25,000/-</li>
			<li>Collective punishment: when the persons committing or abetting the crime of ragging are not
			identified, the institution shall resort to collective punishment as a deterrent to ensure community pressure on the potential raggers.</li>
		</ul>
		<p>As a preventive measure, all the existing students, freshers and their parents/guardians shall submit an undertaking in the prescribed form in the beginning of the academic session itself failing which the concerned student will not be allowed to attend classes until he/she and his/her parents/guardians submit the said undertaking.</p>
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