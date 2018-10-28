document.querySelector("form").addEventListener("submit",validate);
document.querySelector("#passw").addEventListener("input",pstatus);
document.querySelector("#localite").addEventListener("change",checkForCheck);


function checkForCheck(){
	var parentInfo=document.querySelectorAll(".parent");
	if(this.checked){
			for(var i=0;i<parentInfo.length;i++){
				document.querySelector("#g_"+parentInfo[i].id.split("_")[1]).value=parentInfo[i].value;
				document.querySelector("#g_"+parentInfo[i].id.split("_")[1]).readOnly="true";
				parentInfo[i].addEventListener("input",parentGuardian);

			}
	}
	else{
		for(var i=0;i<parentInfo.length;i++){
			document.querySelector("#g_"+parentInfo[i].id.split("_")[1]).value="";
			document.querySelector("#g_"+parentInfo[i].id.split("_")[1]).removeAttribute("readOnly");
			parentInfo[i].removeEventListener("input",parentGuardian);
		}
	}
}

function parentGuardian(){
	document.querySelector("#g_"+this.id.split("_")[1]).value=this.value;
}


function pstatus(){
	var currP=document.querySelector("#passw").value,
		status=document.querySelector("#passw-status");
	if(currP.length===0){
		status.textContent="Empty";
		status.style.color="black";
	}
	else if(currP.length<8){
		status.textContent="Min. 8 characters";
		status.style.color="rgb(150,0,0)";
	}
	else if(currP.match(/^[0-9A-Za-z]+$/) && currP.length<15){
		status.textContent="Weak";
		status.style.color="#f11a1a";
	}
	else if(!currP.match(/^[0-9A-Za-z]+$/) && currP.length>15){
		status.textContent="Strong!!!";
		status.style.color="rgb(50,200,50)";
	}
	else {
		status.textContent="Okay...";
		status.style.color="rgb(255,165,0)";
	}
}


function validate(e){

	var errorMessage="<span id='error-head'>Error(s):</span>";
	var original=errorMessage;
	if(document.querySelector("#usn").value.length<1)errorMessage+="<p>USN is required</p>";
	else{
		if(!document.querySelector("#usn").value.match(/^[0-9A-Za-z]+$/))errorMessage+="<p>USN can only have alphanumeric characters</p>"
	}

	if(document.querySelector("#passw").value.length<8)errorMessage+="<p>Password should be more than 8 characters.</p>";

	if(document.querySelector("#passw").value!==document.querySelector("#c_passw").value)errorMessage+="<p>Password and Confirmed password do not match.</p>";
	if(document.querySelector("#passw").value.match(/'/)||document.querySelector("#c_passw").value.match(/'/))errorMessage+="<p>Invalid Character \" ' \". Re-enter passwords.</p>";




	if(document.querySelector("#stu_name").value.length<1)errorMessage+="<p>Student Name is required.</p>";
	else{
		if(!document.querySelector("#stu_name").value.match(/^[ A-Za-z]+$/))errorMessage+="<p>Student Name can only have alphabets</p>"
	}

	if(document.querySelector("#stu_dob").value.length<1)errorMessage+="<p>Student Date Of Birth is required.</p>";
	else{
		var date=new Date(Date.now());
		var curYear=parseInt(date.toISOString().split("T")[0].split("-")[0]);
		var birthYear=parseInt(document.querySelector("#stu_dob").value.split("-")[0]);
		if(curYear-birthYear<15 || curYear-birthYear>110)errorMessage+="<p>Student Date Of Birth is invalid.</p>";
	}

	if(document.querySelector("#stu_email").value.length<1)errorMessage+="<p>Student Email is required.</p>";
	else{
		if((!document.querySelector("#stu_email").value.match(/^[^@]+@[^@]+(\.com)$/))||document.querySelector("#stu_email").value.match(/'/))errorMessage+="<p>Invalid Student Email Id expression or character ' used.</p>";
	}

	if(document.querySelector("#stu_number").value.length<1)errorMessage+="<p>Student Mobile Number is required.</p>";
	else{var num=document.querySelector("#stu_number").value.length;
		if(num<10 || num>14)errorMessage+="<p>Invalid Student Mobile Number</p>";
	}

	if(document.querySelector("#stu_address").value.length<1)errorMessage+="<p>Student Address is required.</p>";
	if(document.querySelector("#stu_address").value.match(/'/))errorMessage+="<p>Student Address has invalid character '.</p>";

	if(document.querySelector("#stu_course").value=="Choose Course")errorMessage+="<p>Student Course is required.</p>";




	if(document.querySelector("#p_name").value.length<1)errorMessage+="<p>Parent Name is required.</p>";
	else{
		if(!document.querySelector("#p_name").value.match(/^[ A-Za-z]+$/))errorMessage+="<p>Parent Name can only have alphabets</p>"
	}

	if((document.querySelector("#p_email").value.length<1)||document.querySelector("#p_email").value.match(/'/))errorMessage+="<p>Invalid Parent Email Id expression or character ' used.</p>";
	else{
		if(!document.querySelector("#p_email").value.match(/^[^@]+@[^@]+(\.com)$/))errorMessage+="<p>Invalid Parent Email Id</p>";
	}

	if(document.querySelector("#p_number").value.length<1)errorMessage+="<p>Parent Mobile Number is required.</p>";
	else{var num=document.querySelector("#g_number").value.length;
		if(num<10 || num>14)errorMessage+="<p>Invalid Parent Mobile Number</p>";
	}

	if(document.querySelector("#p_address").value.length<1)errorMessage+="<p>Parent Address is required.</p>";
	if(document.querySelector("#p_address").value.match(/'/))errorMessage+="<p>Parent Address has invalid character '.</p>";




	if(document.querySelector("#g_name").value.length<1)errorMessage+="<p>Guardian Name is required.</p>";
	else{
		if(!document.querySelector("#g_name").value.match(/^[ A-Za-z]+$/))errorMessage+="<p>Guardian Name can only have alphabets</p>"
	}

	if((document.querySelector("#g_email").value.length<1)||document.querySelector("#g_email").value.match(/'/))errorMessage+="<p>Invalid Guardian Email Id expression or character ' used.</p>";
	else{
		if(!document.querySelector("#g_email").value.match(/^[^@]+@[^@]+(\.(com)|(org)|(net)|(edu)|(gov))$/))errorMessage+="<p>Invalid Guardian Email Id</p>";
	}

	if(document.querySelector("#g_number").value.length<1)errorMessage+="<p>Guardian Mobile Number is required.</p>";
	else{var num=document.querySelector("#g_number").value.length;
		if(num<10 || num>14)errorMessage+="<p>Invalid Guardian Mobile Number</p>";
	}

	if(document.querySelector("#g_address").value.length<1)errorMessage+="<p>Guardian Address is required.</p>";
	if(document.querySelector("#g_address").value.match(/'/))errorMessage+="<p>Guardian Address has invalid character '.</p>";




	if(errorMessage!==original){
		e.preventDefault();
		document.querySelector("#error-box").innerHTML=errorMessage;
		document.querySelector("#error-box").style.display="block";
		document.documentElement.scrollTop= 0;
	}
	else{
		if(!confirm("Register? Fee Must be paid to Warden within a months time."))e.preventDefault();
	}
}