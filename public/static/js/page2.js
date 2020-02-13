let date = new Date();
console.log();
let comments = document
    .getElementById('comments');
let formP2 = document.forms.comments;
formP2.addEventListener("submit", commentGen);

function commentGen(event) {
    event.preventDefault();
    let date = new Date();
    // let newComment = form.commText.innerText;
    let formData = new FormData(formP2);
    let comment = formData.get('commText');
    let newBlock = document.createElement("div");
    let img = document.createElement("img");
    img.src = "img/tiger.png";
    let commentContainer = document.createElement("p");
    let dateContainer= document.createElement("p");
    commentContainer.innerText = comment;
    dateContainer.innerText = `${date.getDay()}.${date.getMonth()}.${date.getFullYear()}`;
    newBlock.append(img, commentContainer, dateContainer);
    comments.append(newBlock);
}

//проверка формы записи на игру