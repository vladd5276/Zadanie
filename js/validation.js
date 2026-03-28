document.addEventListener('DOMContentLoaded',function(){
		const regForm = document.getElementById('registerForm');
		const phoneInput = document.getElementById('phone'); 
		const loginForm =document.getElementById('loginForm');

		if (regForm) {
			regForm.addEventListener('submit', function (e){
				if (!regcorrect()){e.preventDefault();}
			})
		}
		if (loginForm) {
			loginForm.addEventListener('submit', function (e){
				if (!loginCorrect()){e.preventDefault();}
			})
		}

		if (phoneInput) {
			phoneInput.addEventListener('input',function(e){
				let value = e.target.value.replace(/\D/g,'');
				e.target.value=value;
				
				if (value.length>0){
					if(value[0]=="7"){value='8'+value.substring(1)};
					if(value[0]!=='8'){value='8'+value};
					if(value.length>11){value=value.substring(0,11)}
					let format = value;
					if (value>1){
						format=value[0]+"("+value.substring(1,4)+")"+value.substring(4,7)+"-"+value.substring(7,9)+"-"+value.substring(9,11);
					}
					e.target.value=format;
				}
			})
		}

			});

	function regcorrect() {
		const login = document.getElementById('login').value;
		const phone = document.getElementById('phone').value;
		const password = document.getElementById('password').value;
		if (password.length < 8) {
			alert ("Пароль должен быть минимум 8 символов");
			return false;
		}
		const loginPattern=/^[a-zA-Z0-9]{6,}$/;
		if (!loginPattern.test(login)){
			alert ("Логин должен содержать буквы, цифры мин 6");
			return false;
		}
		const phonePattern=/^8\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}$/;
		if (!phonePattern.test(phone)){
			alert ("Телефон формат");
			return false;
		}
		return true;
	}

	function loginCorrect() {
		const login = document.getElementById('login').value;
		const password = document.getElementById('password').value;
		if (login.trim()==="" || password.trim()===""){
			alert("Заполните все поля!");
			return false;
		}
		login = login.trim();
		password = password.trim();
		return true;
	}



