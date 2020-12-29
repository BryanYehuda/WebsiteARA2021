const burger = document.querySelector('.burger');
const navArea = document.querySelector('.nav-area');
const links = document.querySelectorAll('.nav-area li');
const line = document.querySelector('.line');
const line2 = document.querySelector('.line2');
const line3 = document.querySelector('.line3');

burger.addEventListener("click", () => {
  navArea.classList.toggle("open"),
  line.classList.toggle("on"),
  line2.classList.toggle("on"),
  line3.classList.toggle("on");
});