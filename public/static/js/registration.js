// const USER_EXISTS = 'Пользователь с таким логином уже существует';
// const REGISTRATION_FAILED = 'Вы не были зарегистрированы';
// const REGISTRATION_SUCCESS = 'Регистрация прошла успешно';

// let form1 = document.forms.registration;
// let login1 = form1.elements.loginR;
// let pwd1 = form1.elements.password;

// // login.value = '';
// // pwd.value = '';


// function responseHandlerr(response) {
//     if(response == REGISTRATION_SUCCESS) {
//         window.location.replace("/personal");
//     } else if (response == REGISTRATION_FAILED) {
//         let elem = document.
//         getElementById('error');
//         elem.innerText = REGISTRATION_FAILED;
//     } else if (response == USER_EXISTS) {
//         let elem = document.
//         getElementById('error');
//         elem.innerText = USER_EXISTS;
//     }
// }


// form1.addEventListener("submit", takeFormR);



// function takeFormR(event) {
// 	 event.preventDefault();
//     let data = new FormData(this);
//     let request = new XMLHttpRequest();
//     request.open("POST", "/adduser",
//         true);
//     request.send(data);
//     request.onload = function() {
//         if (request.status === 200){
//            console.log("123");
//         }
//     }
// 	// event.preventDefault(); //отменяет отправку формы	

// 	// let n = 0;

// 	// let data = new FormData(this);
// 	// if (data.get("loginR").trim().length < 4) {
// 	// 	loginR.nextElementSibling.innerText = "Логин должен быть длиннее 4 символов";
// 	// 	n++;
		
// 	// } else {
// 	// 	loginR.nextElementSibling.innerText = "";
// 	// }
// 	// if (data.get("password").trim().length < 4) {
// 	// 	password.nextElementSibling.innerText = "Пароль должен содеражть минимум 5 символов";
// 	// 	n++;
// 	// } else {
// 	// 	password.nextElementSibling.innerText = "";
// 	// }
	
// 	// if (n>0) return false;

//  //    let request = new XMLHttpRequest();
//  //    request.open("POST", "/adduser", true);
//  //    request.send(data);
//  //    request.onload = function() {
//  //        if (request.status === 200){
//  //            responseHandlerR(request.responseText);
//  //        }
//  //    }
// }
