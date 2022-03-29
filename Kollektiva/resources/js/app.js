require("./bootstrap");

const nextThree = document.querySelector(".nextThree");
const stepTwo = document.querySelector(".stepTwo");
const stepThree = document.querySelector(".stepThree");

nextThree.addEventListener("click", () => {
    console.log("click");
    stepTwo.style.display = "none";
    stepThree.style.display = "block";
});
