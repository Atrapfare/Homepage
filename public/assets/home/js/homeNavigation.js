// constants
const homeNavigation = document.querySelector(".navigation");
const homeMenuToggle = document.querySelector(".menuToggle");
const homeList = document.querySelectorAll(".list");

const homeWelcome = document.querySelector("#welcome");
const homeSkills = document.querySelector("#skills");
const homeProjects = document.querySelector("#projects");
const homeContact = document.querySelector("#contactForm");

const homeSections = [homeWelcome, homeSkills, homeProjects, homeContact];

const homeBody = document.querySelector("body");

// vars
let homeClickedSection;

// onload functioncs
setInterval(homeSetCurrentSectionInNavbar, 1000);


// event listener
homeMenuToggle.addEventListener("click", homeToggleNavigation);

homeBody.addEventListener("click", homeCloseNavigation);

// functions
function homeToggleNavigation() {
    homeNavigation.classList.toggle("open");
}

function homeCloseNavigation(evt) {
    homeClickedSection = evt.target.id;
    if (homeClickedSection !== "menuToggle") {
        homeNavigation.classList.remove("open");
    }
}

function homeSetCurrentSectionInNavbar() {
    homeSections.forEach(section => {
        let observer = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting === true) {
                switch (section.id) {
                    case "welcome":
                        homeList.forEach((item) =>
                            item.classList.remove("active"));
                        homeList[0].classList.add("active");
                        break;
                    case "skills":
                        homeList.forEach((item) =>
                            item.classList.remove("active"));
                        homeList[1].classList.add("active");
                        break;
                    case "projects":
                        homeList.forEach((item) =>
                            item.classList.remove("active"));
                        homeList[1].classList.add("active");
                        break;
                    case "contactForm":
                        homeList.forEach((item) =>
                            item.classList.remove("active"));
                        homeList[2].classList.add("active");
                        break;
                }
            }
        }, {threshold: [0.8], delay: 500});
        observer.observe(section);
    });
}