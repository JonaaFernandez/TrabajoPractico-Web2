"use strict";
function iniciarPagina (){ 
let mensaje = document.querySelector("#mensaje");

let btn_ingNroCal = document.getElementById("ingCap");
btn_ingNroCal.addEventListener("click",getData);


function getData() {
  let name = document.getElementById("name").value;
  if (name === "lucytpft") {
    mensaje.innerHTML = "Gracias por su consulta";
    let name = document.getElementById("name");
    document.getElementById("name").value = "";
  }
  else {
    let name = document.getElementById("name");
    mensaje.innerHTML = "Los datos son incorrectos. Intentelo nuevamente";
    document.getElementById("name").value = "";
    document.getElementById("name").focus();
  }

} 


}
document.addEventListener("DOMContentLoaded",iniciarPagina);