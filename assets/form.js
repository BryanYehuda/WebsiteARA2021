const btn = document.querySelector('.btn-daftar');
const burger = document.querySelector('.burger');
const navArea = document.querySelector('.nav-area');
const links = document.querySelectorAll('.nav-area li');
const line = document.querySelector('.line');
const line2 = document.querySelector('.line2');
const line3 = document.querySelector('.line3');
const white = document.querySelector('.white');
const white2 = document.querySelector('.white2');
const form = document.querySelector('.form-area');
const x = document.querySelector('.form-x');

burger.addEventListener("click", () => {
	navArea.classList.toggle("open"),
	line.classList.toggle("on"),
	line2.classList.toggle("on"),
	line3.classList.toggle("on");
});

function openForm() {
	form.classList.toggle("open"),
	white.classList.toggle("open"),
	white2.classList.toggle("open"),
	x.classList.toggle("open");
  }