let button1 = document.querySelectorAll('.one');
let button2 = document.querySelectorAll('.two');
let button3 = document.querySelectorAll('.three');
let menu1 = document.querySelectorAll('.btn-one');
let menu2 = document.querySelectorAll('.btn-two');
let menu3 = document.querySelectorAll('.btn-three');
console.log(menu1);
console.log(menu2);

for (btn of button1) {
	
	btn.addEventListener("click", showMenu1);

}

function showMenu1 () {
	
	for (menu of menu1) {
	menu.classList.add("open");
	}
	for (menu of menu2) {
	menu.classList.remove("open");
	}
	for (menu of menu3) {
	menu.classList.remove("open");
	}


}

for (btn of button2) {
	
	btn.addEventListener("click", showMenu2);

}

function showMenu2 () {
	
	for (menu of menu2) {
	menu.classList.add("open");
	}
	for (menu of menu1) {
	menu.classList.remove("open");
	}
	for (menu of menu3) {
	menu.classList.remove("open");
	}

}

for (btn of button3) {
	
	btn.addEventListener("click", showMenu3);

}

function showMenu3 () {
	
	for (menu of menu3) {
	menu.classList.add("open");
	}
	for (menu of menu1) {
	menu.classList.remove("open");
	}
	for (menu of menu2) {
	menu.classList.remove("open");
	}
}




//проверка формы
let formPer = document.forms.personal;
let telPer = formPer.elements.tel;
let surnamePer = formPer.elements.surname;
let namePer = formPer.elements.name;
console.log(name);
telPer.value = 'Здесь будет из БД Телефон';
surnamePer.value = 'Здесь будет из БД Фамилия';
namePer.value = 'Здесь будет из БД Имя';
console.log(namePer.value.length);
check = namePer.value;





formPer.addEventListener("submit", takeFormPer);

function takeFormPer(event) {
	event.preventDefault(); //отменяет отправку формы
	console.log("отправка формы");
	// this - форма
	console.log(namePer.value.length);
	
	console.log(namePer.nextElementSibling);
	let formData = new FormData(this);

	let n = 0;
	
	if (formData.get("name").trim().length < 2) {
		namePer.nextElementSibling.innerText = "Имя должно содержать хотя бы 2 буквы";
		n++;
		
	} else {
		namePer.nextElementSibling.innerText = "";
	}
	if (formData.get("surname").trim().length < 2) {
		surnamePer.nextElementSibling.innerText = "Фамилия должна содержать хотя бы 2 буквы";
		n++;
	} else {
		surnamePer.nextElementSibling.innerText = "";
	}
	if (formData.get("tel").trim().length < 10) {
		telPer.nextElementSibling.innerText = "Телефон введен некорректно";
		n++;
	} else {
		telPer.nextElementSibling.innerText = "";
	}

	if (n>0) return false;

	let request = new XMLHttpRequest();
//составляем аякс запрос и отправляем на сервер
	request.open("POST", "/login", true);
	request.send(data);
	//когда придет ответ придет следующая функция
	request.onload = function () {
		if(request.status === 200) {
			// responseHandler(request.responseText); //responseHandler надо писать
		}
	}
}