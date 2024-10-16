// consts
const inputField = document.querySelector("#contactInputMessage");
const characterCounter = document.querySelector("#characterCounter");

// consts

// constants

// vars
let estimatedCharacters;
let charachterOutput = "";
let usedCharacters = 0;
let character5k = 5000;

// onload functioncs

// event listener
inputField.addEventListener('keyup', displayEstimatedCharacter); // is called everytime client makes an input

// functions
function displayEstimatedCharacter() {
    usedCharacters = inputField.value.length; // get current lenght of input
    estimatedCharacters = character5k - usedCharacters; // calculate estimated characters
    charachterOutput = "Remaining letters: " + estimatedCharacters;
    if (estimatedCharacters < 0) { // check if max character lenght reached
        charachterOutput = "Maximum message length reached: " + estimatedCharacters;
    }
    characterCounter.textContent = charachterOutput;
}