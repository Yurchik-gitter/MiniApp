function changeText() { 
    alert("gdfdfg");
}

let windowWidth = window.innerWidth + "px";
let windowHeight = window.innerHeight + "px";
let clientWidth = document.documentElement.clientWidth + "px";
let clientHeight = document.documentElement.clientHeight + "px";

console.log("Ширина окна (с полосой прокрутки): " + windowWidth);
console.log("Высота окна (с полосой прокрутки): " + windowHeight);
console.log("Ширина окна (без полосы прокрутки): " + clientWidth);
console.log("Высота окна (без полосы прокрутки): " + clientHeight);

document.body.style.maxWidth = clientWidth;

window.addEventListener("resize", )