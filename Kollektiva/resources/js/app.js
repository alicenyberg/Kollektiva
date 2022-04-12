const { range } = require("lodash");

require("./bootstrap");

const steps = document.querySelectorAll(".steps");
const buttons = document.querySelectorAll(".next");
const pageCounts = document.querySelectorAll(".pageCounter > ul > li");
const displayCurrent = document.querySelector(".pageCounter > p > span ");

let currentStep = 1;
displayCurrent.innerHTML = currentStep;

let stepCount = 0;
steps.forEach((step) => {
    step.dataset.step = stepCount;
    stepCount++;
    console.log(step.dataset.step);
});
steps[1].style.display = "none";
steps[2].style.display = "none";
steps[3].style.display = "none";

let pageCounter = 0;
pageCounts.forEach((page) => {
    page.dataset.step = pageCounter;
    pageCounter++;
    console.log(page.dataset.step);
});

let buttonCount = 0;
buttons.forEach((button) => {
    button.dataset.step = buttonCount;
    buttonCount++;
    console.log(button.dataset.step);

    button.addEventListener("click", () => {
        console.log("click");
        currentStep++;
        displayCurrent.innerHTML = currentStep;

        let next = parseInt(button.dataset.step) + 1;
        console.log(button.dataset.step);
        console.log(next);
        steps[button.dataset.step].style.display = "none";
        steps[next].style.display = "flex";

        pageCounts[button.dataset.step].style.background = "pink";
    });
});

// hamburger

const hamburgerIcon = document.querySelector(".hamburger");
const navBar = document.querySelector(".navbar");

hamburgerIcon.addEventListener("click", () => {
    navBar.classList.toggle("close");
    console.log("hellio");
});

//input

const inputRange = document.getElementById("slider");
const rangeMeter = document.querySelector(".rangeMeter");

rangeMeter.textContent = inputRange.value;

inputRange.textContent = "uwu";
inputRange.addEventListener("input", () => {
    rangeMeter.textContent = inputRange.value;
    console.log(inputRange.value);

    if (inputRange.value >= 100) {
        rangeMeter.textContent = "100+ max";
    }
});
