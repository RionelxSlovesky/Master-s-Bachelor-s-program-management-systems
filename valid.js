var email = document.forms['form']['email'];
var password = document.forms['form']['password'];
var nm = document.forms['form']['name'];
var university = document.forms['form']['university'];

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('password_error');
var name_error = document.getElementById('name_error');
var university_error = document.getElementById('university_error');

email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);
name.addEventListener('textInput', name_Verify);
university.addEventListener('textInput', university_Verify);

function validated(){
	if (nm.value.length < 5) {
		nm.style.border = "1px solid red";
		name_error.style.display = "block";
		nm.focus();
		return false;
	}
	if (email.value.length < 1) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (university.value.length < 1) {
		university.style.border = "1px solid red";
		university_error.style.display = "block";
		university.focus();
		return false;
	}
	if (password.value.length < 6) {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}

}


function email_Verify(){
	if (email.value.length >= 1) {
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
		return true;
		}
	}
function pass_Verify(){
	if (password.value.length >= 6) {
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
		}
	}
function name_Verify(){
	if (name.value.length >= 6) {
		name.style.border = "1px solid silver";
		name_error.style.display = "none";
			return true;
		}
	}
	function university_Verify(){
	if (university.value.length >= 6) {
		university.style.border = "1px solid silver";
		university_error.style.display = "none";
		return true;
		}
	}

