console.log('check');

let nick_style = document.querySelector(".nickname");
let pass_style = document.querySelector(".password");

function CheckForm() {
	let nickname = document.querySelector(".nickname").value;
	let password = document.querySelector(".password").value;
	let error;

	if (nickname == '' && password == ''){
		console.log(1);
		nick_style.style.border = "2px solid red";
		pass_style.style.border = "2px solid red";
		error = "Заполните все поля!";
		document.getElementById('error').innerHTML = error;
		return false;
	} else if (nickname == ''){
		console.log(2);
		nick_style.style.border = "2px solid red";
		error = "Заполните все поля!";
		document.getElementById('error').innerHTML = error;
		return false;

	} else if (password == ''){
		console.log(3);
		pass_style.style.border = "2px solid red";
		error = "Заполните все поля!";
		document.getElementById('error').innerHTML = error;
		return false;
	} else {
		return true;
	}


}