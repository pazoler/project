let menu = document.querySelectorAll('.menu a.show');
let menu_drop = document.querySelectorAll('.menu_drop');

for (a of menu) {
	
	a.addEventListener("mouseover", showMenu);

}



function showMenu () {
	
	for (ul of menu_drop) {
	ul.classList.remove("open");
	}
	this.nextElementSibling.classList.add("open");

}


document.onmouseover = function(event) {
	let target = event.target
	if(target.className=='head' || target.className=='item' || target.className=='flex-1') {
		for (ul of menu_drop) {
		ul.classList.remove("open");
	}
	}
}

//всплывание формы входа
let entry = document.querySelectorAll('.entry1');
let entry_form = document.querySelectorAll('.entry_form');


for (a of entry) {
	
	a.addEventListener("click", showEntry);

}

function showEntry() {
	entry_form[0].classList.add('open');
}

let close = document.querySelectorAll('.close');


for (button of close) {
	
	button.addEventListener("click", closeEntry);

}



//проверка на ввод формы

const SUCCESS = "Авторизация прошла успешно";
const ERROR = "Ошибка авторизации";
const ERROR_PWD = "Ошибка пароля";



let form = document.forms.entry;
let login = form.elements.login;
let pwd = form.elements.pwd;

// login.value = '';
// pwd.value = '';


form.addEventListener("submit", takeForm);

function responseHandler(response) {
    if(response == SUCCESS) {
        window.location.replace("/personal");
    } else if (response == ERROR) {
        let elem = document.
        getElementById('error');
        elem.innerText = ERROR;
    } else if (response == ERROR_PWD) {
        let elem = document.
        getElementById('error');
        elem.innerText = ERROR_PWD;
    }
}

function takeForm(event) {
	event.preventDefault(); //отменяет отправку формы	

	let n = 0;

	let data = new FormData(this);
	if (data.get("login").trim().length < 4) {
		login.nextElementSibling.innerText = "Логин должен быть длиннее 4 символов";
		n++;
		
	} else {
		login.nextElementSibling.innerText = "";
	}
	if (data.get("pwd").trim().length < 4) {
		pwd.nextElementSibling.innerText = "Пароль должен содеражть минимум 5 символов";
		n++;
	} else {
		pwd.nextElementSibling.innerText = "";
	}
	
	if (n>0) return false;

    let request = new XMLHttpRequest();
    request.open("POST", "/login",
        true);
    request.send(data);
    request.onload = function() {
        if (request.status === 200){
            responseHandler(request.responseText);
        }
    }
}

function closeEntry() {
	entry_form[0].classList.remove('open');
	login.value = '';
	pwd.value = '';
	pwd.nextElementSibling.innerText = "";
	login.nextElementSibling.innerText = "";
	let elem = document.
        getElementById('error');
        elem.innerText = "";
}


