// hamburger

const hamburgerIcon = document.querySelector(".hamburger");
const navBar = document.querySelector(".navbar");

hamburgerIcon.addEventListener("click", () => {
    navBar.classList.toggle("close");
    console.log("hellio");
});

console.log("hello");
