let enviar = document.querySelector("#enviar");

enviar.addEventListener("click", function (e) {
  e.preventDefault();
  let name = document.querySelector("#name");

  let value = name.value;
  console.log(value);
});