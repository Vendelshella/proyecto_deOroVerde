const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrirmenu");
const cerrar = document.querySelector("#cerrarmenu");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})
cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})