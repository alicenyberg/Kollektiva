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
    steps[stepCount].style.display = "none";
    stepCount++;
    console.log(stepCount);
});
steps[0].style.display = "flex";

let pageCounter = 1;
pageCounts[0].style.background = "#4e0ea1";
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

        pageCounts[button.dataset.step].style.background = "#4e0ea1";
    });
});

// hamburger

const hamburgerIcon = document.querySelector(".hamburger");
const navBar = document.querySelector(".navbar");

hamburgerIcon.addEventListener("click", () => {
    navBar.classList.toggle("close");
    console.log("hellio");
});

// input range

const inputRange = document.getElementById("slider");
const rangeMeter = document.querySelector(".rangeMeter");

rangeMeter.textContent = inputRange.value;

inputRange.textContent = "kvm";
inputRange.addEventListener("input", () => {
    rangeMeter.textContent = inputRange.value + " kvm";
    console.log(inputRange.value);

    if (inputRange.value >= 100) {
        rangeMeter.textContent = "100+ kvm";
    }
});
