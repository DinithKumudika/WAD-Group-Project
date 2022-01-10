const menuBtn = document.getElementById("menu-ico");
const closeBtn = document.getElementById("close-ico");
const navBar = document.getElementById("nav-list");
const viewportWidth = window.innerWidth;
const width = 860;

menuBtn.addEventListener('click', function () {
    menuBtn.style.display="none";
    closeBtn.style.display="block";
    navBar.classList.add("nav-display");
});

closeBtn.addEventListener('click', function () {
    closeBtn.style.display="none";
    navBar.classList.remove("nav-display");
    menuBtn.style.display="block";
});