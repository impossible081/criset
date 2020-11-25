// Function for toggling modal
function toogle(x){
	if (x == 'login') {
		y = 'signup';
		z = 'reset';
	}
	else if (x == 'signup') {
		y = 'login';
		z = 'reset';
	}
	else{
		y = 'login';
		z = 'signup';
	}
	$('#'+x).modal('show');
	$('#'+y).modal('hide');
	$('#'+z).modal('hide');
}

// jquery function to check if terms was checked
function isChecked () {
	const terms = document.getElementById('terms');
	const signup = document.querySelector('.signup');
	if(terms.checked == true) {
		signup.style.display = 'block';
	} else {
		signup.style.display = 'none';
	}	
}
function isBtnChecked(){
	const terms = document.getElementById('term1');
	const signup = document.querySelector('.isBtn');
	if(terms.checked == true) {
		signup.style.display = 'block';
	} else {
		signup.style.display = 'none';
	}
}



