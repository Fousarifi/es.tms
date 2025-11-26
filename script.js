let menuBtn = document.getElementById("menu-btn");
let navLinks = document.getElementById("nav-links");

menuBtn.onclick = () => {
    navLinks.classList.toggle("active");
};
const menuBtn = document.getElementById("menu-btn");
const newLocal = document.getElementById("nav-links");

menuBtn.onclick = () => {
  navLinks.classList.toggle("active");
};
document.getElementById("menu-btn").onclick = function () {
    document.getElementById("nav-links").classList.toggle("active");
};