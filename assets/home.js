const burger = document.querySelector('.burger');
const navArea = document.querySelector('.nav-area');
const links = document.querySelectorAll('nav-area li');

burger.addEventListener("click", () => {
  navArea.classList.toggle("open");
});