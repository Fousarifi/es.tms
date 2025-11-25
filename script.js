let menuBtn = document.getElementById("menu-btn");
let navLinks = document.getElementById("nav-links");

menuBtn.onclick = () => {
    navLinks.classList.toggle("active");
};