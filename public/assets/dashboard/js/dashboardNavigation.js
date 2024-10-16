// constants
const dashboardNavigation = document.querySelector(".navigation");
const dashboardMenuToggle = document.querySelector(".menuToggle");
const dashboardList = document.querySelectorAll(".list");

const dashboardDetails = document.querySelector("#details");
const dashboardSecurity = document.querySelector("#security");
const dashboardSettings = document.querySelector("#settings");
const dashboardDownload = document.querySelector("#download");

const sections = [dashboardDetails, dashboardSecurity, dashboardSettings, dashboardDownload];

const dashboardBody = document.querySelector("body");

// vars
let dashboardClickedSection;

// onload functioncs
setInterval(dashboardSetCurrentSectionInNavbar, 1000);


// event listener
dashboardMenuToggle.addEventListener("click", dashboardToggleNavigation);

dashboardBody.addEventListener("click", dashboardCloseNavigation);

// functions
function dashboardToggleNavigation() {
    dashboardNavigation.classList.toggle("open");
}

function dashboardCloseNavigation(evt) {
    dashboardClickedSection = evt.target.id;
    if (dashboardClickedSection !== "menuToggle") {
        dashboardNavigation.classList.remove("open");
    }
}

function dashboardSetCurrentSectionInNavbar() {
    sections.forEach(section => {
        let observer = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting === true) {
                switch (section.id) {
                    case "details":
                        dashboardList.forEach((item) =>
                            item.classList.remove("active"));
                        dashboardList[1].classList.add("active");
                        break;
                    case "security":
                        dashboardList.forEach((item) =>
                            item.classList.remove("active"));
                        dashboardList[2].classList.add("active");
                        break;
                    case "settings":
                        dashboardList.forEach((item) =>
                            item.classList.remove("active"));
                        dashboardList[3].classList.add("active");
                        break;
                    case "download":
                        dashboardList.forEach((item) =>
                            item.classList.remove("active"));
                        dashboardList[4].classList.add("active");
                        break;
                }
            }
        }, {threshold: [0.85], delay: 500});
        observer.observe(section);
    });
}