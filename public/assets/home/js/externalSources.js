// constants
const externalSource = document.querySelector("#externalSourceMaps");
const map = document.querySelector("#map");
const mapButton = document.querySelector("#mapsAccept");

// vars
let mapAccepted;

// onload functioncs
window.addEventListener("load", getMap); // check if client already agreed or show warning


// event listener
mapButton.addEventListener("click", setMapinDocument); // show map and save agreement

// functions
function getMap() {
    mapAccepted = localStorage.getItem("mapAccepted");
    if (mapAccepted === "true") {
        setMapinDocument();
    }
}

function setMap() {
    mapAccepted = "true";
    localStorage.setItem("mapAccepted", mapAccepted);
}

function setMapinDocument() {
    setMap();
    externalSource.style.display = "none";
    map.style.display = "block";
}