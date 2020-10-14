"use strict";
document.addEventListener('DOMContentLoaded', function (){ 

document.querySelector(".boton_menu").addEventListener("click", toggleMenu);

function toggleMenu() {
    document.querySelector(".botonera").classList.toggle("show");
}
})



