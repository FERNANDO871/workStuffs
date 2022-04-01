var eye = document.getElementById('txtpassword');
var input = document.getElementById('Input');
txtpassword.addEventListener("click", function()){
	if (input.type == "password"){
		input.type == "text"
		txtpassword.style.opacity=0.8
	}else{
		input.type == "password"
		txtpassword.style.opacity=0.2
	}
}