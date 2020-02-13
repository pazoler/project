let formTable = document.forms.table;
console.log(formTable);

let placeTable = formTable.elements.place_row;
let dateTable = formTable.elements.date_row;
console.log(dateTable);

formTable.addEventListener("submit", takeForm);
function takeForm (event) {
event.preventDefault();
let formTableData = new FormData(this);
console.log(formData.get("login"));
console.log(formData.get("pwd"));
}