<!DOCTYPE html>
<html>

<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1 class="text-success text-center "> Registration Form</h1><br>
<div class="col-leg-8 m-auto d-block">
<form action="store.php" onsubmit="return validation()" class="bg-light">
<div class="form-group">
<label>Username: </label>
<input type="text" name="user" class="form-control" id="user" autocomplete="off">
<span id="username" class="text-danger"></span>

</div>
<div class="form-group">
<label>Password: </label>
<input type="password" name="pass" class="form-control" id="pass" autocomplete="off">
<span id="password" class="text-danger"></span>

</div>
<div class="form-group">
<label> ConfirmPassword: </label>
<input type="password" name="pass" class="form-control" id="conpass" autocomplete="off">
<span id="confirmpass" class="text-danger"></span>

</div>
<div class="form-group">
<label>Mobile Number: </label>
<input type="text" name="mobile" class="form-control" id="MobileNumber" autocomplete="off">
<span id="mobileno" class="text-danger"></span>

</div>
<div class="form-group">
<label>Email: </label>
<input type="text" name="email" class="form-control" id="email" autocomplete="off">
<span id="emailids" class="text-danger"></span>

</div>
<input type="submit" name="submit" value="submit" class="btn btn-success">
</form>

</div>
</div>

<script type="text/javascript">
function validation(){
	var user= document.getElementById('user').value;
    var pass= document.getElementById('pass').value;
    var confirmpass= document.getElementById('conpass').value;
    var mobileNumber= document.getElementById('MobileNumber').value;
    var email= document.getElementById('email').value;




	if(user == ""){
		
		document.getElementById('username').innerHTML ="** please Enter the username field";
		return false;
	}
if((user.length <=2) || (user.length >20)){
	
	document.getElementById('username').innerHTML ="** user length must be between 2 and 20";
		return false;
}
if(!isNaN(user)){
	document.getElementById('username').innerHTML ="** only characters are allowed";
		return false;
}


	if(pass == ""){
		
		document.getElementById('password').innerHTML ="** please Enter the password field";
		return false;
	}
	if((pass.length <8) || (pass.length >20)){
	
	document.getElementById('password').innerHTML ="** password length must be at least 8";
		return false;
}
if(pass!= confirmpass){
	document.getElementById('confirmpass').innerHTML ="** passwords are not matching";
		return false;

}


	if(confirmpass == ""){
		
		document.getElementById('confirmpass').innerHTML ="** please Enter the confirmpassword field";
		return false;
	}
	if(mobileNumber == ""){
		
		document.getElementById('mobileno').innerHTML ="** please Enter the mobileNo field";
		return false;
	}
	if(isNaN(mobileNumber)){
	document.getElementById('mobileno').innerHTML ="** please enter only digits";
		return false;	
	}
	if(mobileNumber.lenght == 11){
		
		document.getElementById('mobileno').innerHTML ="** please Enter 11 digits";
		return false;
	}
	if(email == ""){
		
		document.getElementById('emailids').innerHTML ="** please Enter the email field";
		return false;
	}
	if(email.indexOf('@')<=0){
		
		document.getElementById('emailids').innerHTML ="** @ Invalid position:";
		return false;
	}
	if((email.charAt(email.length-4)!='.')&& (email.charAt(email.length-3)!='.')){
		document.getElementById('emailids').innerHTML ="** . Invalid position:";
		return false;
	}

}


</script>
</body>
</html>