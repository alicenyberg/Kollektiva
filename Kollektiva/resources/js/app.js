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

// input range - squaremeter

const inputRangeMeter = document.getElementById("slider-squaremeter");
const rangeMeter = document.querySelector(".rangeMeter-squaremeter");

rangeMeter.textContent = inputRangeMeter.value;

inputRangeMeter.textContent = "kvm";
inputRangeMeter.addEventListener("input", () => {
    rangeMeter.textContent = inputRangeMeter.value + " kvm";
    console.log(inputRangeMeter.value);

    if (inputRangeMeter.value >= 100) {
        rangeMeter.textContent = "100+ kvm";
    }
});

// input range - rent

const inputRangeRent = document.getElementById("slider-rent");
const rangeRent = document.querySelector(".rangeMeter-rent");

rangeRent.textContent = inputRangeRent.value;

inputRangeRent.textContent = "0 kr";
inputRangeRent.addEventListener("input", () => {
    rangeRent.textContent = inputRangeRent.value + " kr";
    console.log(inputRangeRent.value);

    if (inputRangeRent.value >= 3000) {
        rangeRent.textContent = "3000 +" + " kr";
    }
});
