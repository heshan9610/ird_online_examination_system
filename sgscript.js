function checkPassword(){
	if(document.getElementById("pwd").value!=document.getElementById("cnfrmpwd").value){
		alert("Password Mismatch!");
		return false;
	}
	else{
		alert("Matching passwords!");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitBtn").disabled=false;
	}

	else{
		document.getElementById("submitBtn").disabled=true;
	}
}

function enableButton1(){
	if(document.getElementById("checkbox1").checked){
		document.getElementById("submitBtn1").disabled=false;
	}

	else{
		document.getElementById("submitBtn1").disabled=true;
	}
}
