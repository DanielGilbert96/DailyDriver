function validar(){
	var firstname, lastname, email, username, password, phonenumber, expresion;
	firstname = document.getElementById("firstname").value;
	lastname = document.getElementById("lastname").value;
	email = document.getElementById("email").value;
	username = document.getElementById("username").value;
	password = document.getElementById("password").value;
	phonenumber = document.getElementById("phonenumber").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if(firstname === "" || lastname === "" || email === "" || username === "" || password === "" || phonenumber === ""){
		alert("Enter in all fields");
		return false;
	}
	else if (firstname.length>30){
		alert("Please enter in your first name, maximum 30 characters");
		return false;
	}
	else if (lastname.length>30){
		alert("Please enter in your last name, maximum 30 characters");
		return false;
	}
	else if (email.length>100){
		alert("Decrease email length");
		return false;
	}
	else if(!expresion.test(email)){
		alert("Email invalid");
		return false;
	}
	else if (username.length>20 || password.length>20){
		alert("Decrease the number of characters");
		return false;
	}
	else if (phonenumber.length>10 || phonenumber.length<10){
		alert("Invalid phone number");
		return false;
	}
		else if (isNaN(phonenumber)){
		alert("Invalid phone number");
		return false;
	}


}