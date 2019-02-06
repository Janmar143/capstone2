function submitReg(){
		var form = document.register;
		if(form.firstname.value ==""){
			alert("Enter username.");
			return false;
		}
		else if(form.lastname.value ==""){
			alert("Enter lastname");
			return false;
		}
		else if(form.address.value ==""){
			alert("Enter address");
			return false;
		}
		else if(form.email.value ==""){
			alert("Enter email");
			return false;
		}
		else if(form.password.value ==""){
			alert("Enter password");
			return false;
		}
		else if(form.birthday.value ==""){
			alert("Enter birthday");
			return false;
		}
		else if(form.year.value ==""){
			alert("Enter year");
			return false;
		}
		else if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) 
		{
		alert ( "Please choose your Gender: Male or Female" ); 
		return false;
		}

		}