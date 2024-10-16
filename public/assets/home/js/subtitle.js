// constants
const subtitle1 = document.querySelector("#subtitle1");
const subtitle2 = document.querySelector("#subtitle2");
const subtitle3 = document.querySelector("#subtitle3");


// vars
let subtitleCounter = 0;

// onload functioncs
window.addEventListener("load", changeSubtitle);

// event listener


// functions
function sleep(milliseconds) {
    return new Promise(resolve => setTimeout(resolve, milliseconds));
}

async function changeSubtitle() {
    while (subtitleCounter < 3) {
        subtitleCounter = 0;
        await sleep(1500);
        changeColorOfSubtitle();
        subtitleCounter++;
        await sleep(1500);
        changeColorOfSubtitle();
        subtitleCounter++;
        await sleep(1500);
        changeColorOfSubtitle();
    }
}

function changeColorOfSubtitle() {
    if (subtitleCounter === 0) {
        subtitle1.classList.remove("text-info");
        subtitle1.classList.add("text-warning");
        subtitle2.classList.remove("text-danger");
        subtitle2.classList.add("text-info");
        subtitle3.classList.remove("text-warning");
        subtitle3.classList.add("text-danger");
    } else if (subtitleCounter === 1) {
        subtitle1.classList.remove("text-warning");
        subtitle1.classList.add("text-danger");
        subtitle2.classList.remove("text-info");
        subtitle2.classList.add("text-warning");
        subtitle3.classList.remove("text-danger");
        subtitle3.classList.add("text-info");
    } else if (subtitleCounter === 2) {
        subtitle1.classList.remove("text-danger");
        subtitle1.classList.add("text-info");
        subtitle2.classList.remove("text-warning");
        subtitle2.classList.add("text-danger");
        subtitle3.classList.remove("text-info");
        subtitle3.classList.add("text-warning");
    }
}