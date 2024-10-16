// constants
const root = document.querySelector(":root"); // get root element for edit root variables
const accentColorGreen = document.querySelector("#green");
const accentColorBlue = document.querySelector("#blue");
const accentColorRed = document.querySelector("#red");
const accentColorBlack = document.querySelector("#black");
const accentColorYellow = document.querySelector("#yellow");

const accentColorModal = new bootstrap.Modal(document.querySelector("#accentColor"), {
    focus: true
});

// vars
let accentColor = "green"; // default accent color

// onload functioncs
window.addEventListener("load", getAccentColor); // get accent color on load


// event listener
accentColorGreen.addEventListener("click", changeAccentColorGreen);
accentColorBlue.addEventListener("click", changeAccentColorBlue);
accentColorRed.addEventListener("click", changeAccentColorRed);
accentColorBlack.addEventListener("click", changeAccentColorBlack);
accentColorYellow.addEventListener("click", changeAccentColorYellow);

// functions
function changeAccentColorGreen() {
    root.style.setProperty("--accentColor", "rgb(25, 135, 84)"); // change accent color via root element
    saveAccentColor("green"); // save accent color for later sessions
    accentColorModal.hide();
    toast1Hide();
}

function changeAccentColorBlue() {
    root.style.setProperty("--accentColor", "rgb(13, 202, 240)"); // change accent color via root element
    saveAccentColor("blue") // save accent color for later sessions
    accentColorModal.hide();
    toast1Hide();
}

function changeAccentColorRed() {
    root.style.setProperty("--accentColor", "rgb(220, 53, 69)"); // change accent color via root element
    saveAccentColor("red") // save accent color for later sessions
    accentColorModal.hide();
    toast1Hide();
}

function changeAccentColorBlack() {
    root.style.setProperty("--accentColor", "rgb(84, 84, 84)"); // change accent color via root element
    saveAccentColor("black"); // save accent color for later sessions
    accentColorModal.hide();
    toast1Hide();
}

function changeAccentColorYellow() {
    root.style.setProperty("--accentColor", "rgb(255, 193, 7)"); // change accent color via root element
    saveAccentColor("yellow"); // save accent color for later sessions
    accentColorModal.hide();
    toast1Hide();
}


function saveAccentColor(color) {
    localStorage.setItem("accentColor", color);
}

function getAccentColor() { // get the saved accent color --> later session
    accentColor = localStorage.getItem("accentColor");
    if (accentColor === "green") {
        root.style.setProperty("--accentColor", "rgb(25, 135, 84)");
    } else if (accentColor === "blue") {
        root.style.setProperty("--accentColor", "rgb(13, 202, 240)");
    } else if (accentColor === "red") {
        root.style.setProperty("--accentColor", "rgb(220, 53, 69)");
    } else if (accentColor === "black") {
        root.style.setProperty("--accentColor", "rgb(84, 84, 84)");
    } else if (accentColor === "yellow") {
        root.style.setProperty("--accentColor", "rgb(255, 193, 7)");
    } else {
        root.style.setProperty("--accentColor", "rgb(25, 135, 84)");
    }
}