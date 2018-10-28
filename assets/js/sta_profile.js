var privileges=document.querySelectorAll(".cmd_btn");
var hide=document.querySelectorAll(".hide_btn");

if(document.querySelector("#form_add")){
	document.querySelector("#form_add").addEventListener("submit",validateNewStaff);
}
if(document.querySelector("#form_givep")){
	document.querySelector("#form_givep").addEventListener("submit",validateEditStaff);
}
if(document.querySelector("#sta_passw")){
	document.querySelector("#sta_passw").addEventListener("input",pstatus);
}



for(var i=0;i<privileges.length;i++){
	privileges[i].addEventListener("click",function(){
		document.querySelector("#container_form_"+this.id).style.display="block";
	})
}
for(var i=0;i<hide.length;i++){
	hide[i].addEventListener("click",function(){
		document.querySelector("#container_form_"+this.id.split("_")[2]).style.display="none";
	})
}


function pstatus(){
	var currP=document.querySelector("#sta_passw").value,
		status=document.querySelector("#sta_passw-status");
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


function validateNewStaff(e){

	var errorMessage="<span class='error-head'>Error(s):</span>";
	var original=errorMessage;
	if(document.querySelector("#sta_id").value.length<1)errorMessage+="<p>Staff ID is required</p>";
	else{
		if(!document.querySelector("#sta_id").value.match(/^[0-9A-Za-z]+$/))errorMessage+="<p>Staff ID can only have alphanumeric characters</p>"
	}

	if(document.querySelector("#sta_passw").value.length<8)errorMessage+="<p>Password should be more than 8 characters.</p>";

	if(document.querySelector("#sta_passw").value!==document.querySelector("#sta_c_passw").value)errorMessage+="<p>Password and Confirmed password do not match.</p>";
	if(document.querySelector("#sta_passw").value.match(/'/)||document.querySelector("#sta_c_passw").value.match(/'/))errorMessage+="<p>Invalid Character \" ' \". Re-enter passwords.</p>";




	if(document.querySelector("#sta_name").value.length<1)errorMessage+="<p>Staff Name is required.</p>";
	else{
		if(!document.querySelector("#sta_name").value.match(/^[ A-Za-z]+$/))errorMessage+="<p>Staff Name can only have alphabets</p>"
	}

	if(document.querySelector("#sta_dob").value.length<1)errorMessage+="<p>Staff Date Of Birth is required.</p>";
	else{
		var date=new Date(Date.now());
		var curYear=parseInt(date.toISOString().split("T")[0].split("-")[0]);
		var birthYear=parseInt(document.querySelector("#sta_dob").value.split("-")[0]);
		if(curYear-birthYear<18 || curYear-birthYear>110)errorMessage+="<p>Staff Date Of Birth is invalid.</p>";
	}
	if(document.querySelector("#sta_doj").value.length<1)errorMessage+="<p>Staff Date Of Joining is required.</p>";
	else{
		var date=new Date(Date.now());
		var curYear=parseInt(date.toISOString().split("T")[0].split("-")[0]);
		var joinYear=parseInt(document.querySelector("#sta_doj").value.split("-")[0]);
		if(curYear<joinYear || joinYear<1972)errorMessage+="<p>Staff Date Of Joining is invalid.</p>";
	}

	if(document.querySelector("#sta_email").value.length<1)errorMessage+="<p>Staff Email is required.</p>";
	else{
		if(!document.querySelector("#sta_email").value.match(/^[^@]+@[^@]+((\.com)|(\.edu)|(\.org)|(\.net)|(\.in))$/)||document.querySelector("#sta_email").value.match(/'/))errorMessage+="<p>Invalid Staff Email Id expression or character ' used.</p>";
	}

	if(document.querySelector("#sta_number").value.length<1)errorMessage+="<p>Staff Mobile Number is required.</p>";
	else{var num=document.querySelector("#sta_number").value.length;
		if(num<10 || num>14)errorMessage+="<p>Invalid Staff Mobile Number</p>";
	}

	if(document.querySelector("#sta_address").value.length<1)errorMessage+="<p>Staff Address is required.</p>";
	if(document.querySelector("#sta_address").value.match(/'/))errorMessage+="<p>Staff Address has invalid character '.</p>";

	if(errorMessage!==original){
		e.preventDefault();
		document.querySelector("#error-box-add").innerHTML=errorMessage;
		document.querySelector("#error-box-add").style.display="block";
	}
	else{
		if(!confirm("Add as Staff?"))e.preventDefault();
	}
}

function validateEditStaff(e){

	var errorMessage="<span class='error-head'>Error(s):</span>";
	var original=errorMessage;
	if(document.querySelector("#sta_tbe_id").value.length<1)errorMessage+="<p>Staff ID is required</p>";
	else{
		if(!document.querySelector("#sta_tbe_id").value.match(/^[0-9A-Za-z]+$/))errorMessage+="<p>Staff ID can only have alphanumeric characters</p>"
	}

	if(errorMessage!==original){
		e.preventDefault();
		document.querySelector("#error-box-givep").innerHTML=errorMessage;
		document.querySelector("#error-box-givep").style.display="block";
	}
	else{
		if(!confirm("Edit Privileges?"))e.preventDefault();
	}
}