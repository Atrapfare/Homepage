// constants
const toast1 = new bootstrap.Toast(document.querySelector("#toast1"), {
    delay: 1000,
    animation: true,
    autohide: false
});
const toastTimeAgo = document.querySelector(".toastTimeAgo");

// vars
let minute = 0; // start minute at 0

// onload functioncs
window.addEventListener("load", getToast1); // check if client already saw the toast


// event listener


// functions
function enableToast1() {
    toast1.show();
    setInterval(increaseMinute, 60000); // timeout --> 1 min --> increase displayed minute by 1

    function increaseMinute() {
        minute++;
        toastTimeAgo.textContent = minute + " min ago";
    }
}

function setToast1() {
    localStorage.setItem("toast1View", "true"); // set toast as viewed --> for later sessions --> is no longer shown
}

function getToast1() {
    let toast1_view = localStorage.getItem("toast1View");
    if (toast1_view === null) { // check if toast already viewed
        setToast1();
        enableToast1();
    }
}

function toast1Hide() {
    toast1.hide();
}