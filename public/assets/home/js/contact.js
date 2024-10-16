// constants
const email = document.querySelector("#sendMail");
const call = document.querySelector("#call");

const contactForm = document.querySelector("#contactForm");
const contactSubmitForm = document.querySelector("#contactSubmitForm");

const mailSendSuccessModal = new bootstrap.Modal(document.querySelector("#contactMailSuccess"), {
    focus: true
});
const mailSendFailureModal = new bootstrap.Modal(document.querySelector("#contactMailFailure"), {
    focus: true
});

// vars
let contactInputName = document.querySelector("#contactInputName");
let contactInputEmail = document.querySelector("#contactInputEmail");
let contactInputHuman = document.querySelector("#contactInputHuman");
let contactInputMessage = document.querySelector("#contactInputMessage");

let contactInputFields = [
    contactInputName,
    contactInputEmail,
    contactInputHuman,
    contactInputMessage
];

let contactErrors = [] // variable for error handling

// onload functioncs


// event listener
email.addEventListener("click", sendMail);
call.addEventListener("click", callMe);

contactForm.addEventListener("submit", function (e) {
    e.preventDefault(); // prevent default behaviour
    contactErrors = [];
    contactSubmitForm.disabled = true;
    contactSubmitForm.value = "Validating";

    // clean up inputs
    for (const element of contactInputFields) {
        element.value.trim();
    }

    // error handling - client side
    for (const element of contactInputFields) {
        if (element.value === "" && element.getAttribute("name") !== "human") {
            contactErrors.push(element.getAttribute("name"));
        } else if (element.value.length > 5000 && element.getAttribute("name") !== "human") {
            contactErrors.push(element.getAttribute("name"));
        } else if (!contactCheckMail(element.value) && element.getAttribute("name") === "email") {
            contactErrors.push(element.getAttribute("name"));
        } else if (element.value !== "" && element.getAttribute("name") === "human") {
            contactErrors.push(element.getAttribute("name"));
        }
    }

    // submitting form via ajax
    if (contactErrors.length === 0) {
        contactSubmitForm.value = "Sending";
        let formData = new FormData(contactForm); // get input field as FormData Object
        let actionUrl = "/assets/home/php/contact.php"; // path to php script

        try {
            $.ajax({
                type: "POST",
                url: actionUrl, // url jquery send the form
                enctype: "multipart/form-data",
                data: formData, // data that will be sent
                processData: false, // false because otherwise jquery would try to convert data to String --> Error because data is FormData Object
                contentType: false, // false because otherwise jquery would try to convert data to String --> Error because data is FormData Object
                success: function (backendError) {
                    contactErrorHandlerForClient(backendError); // errorHandler because some backend could throw some errors
                },
                error: function () {
                    contactMailFailure(true); // ajax error
                }
            });
        } catch (e) {
            contactMailFailure(false);
        }
    } else {
        contactMailFailure(false);
        contactErrorHandlerForClient(contactErrors); // client side error handling
    }
});


// functions
function sendMail() {
    window.open("mailto:dominik@knaup.de?subject=Kontaktformular", "_blank");
}

function callMe() {
    window.location.href = "tel:01707741716";
}

function contactErrorHandlerForClient(pError) {
    // remove error class because of previous validation
    for (const element of contactInputFields) {
        element.classList.remove("error");
    }

    if (isJSON(pError)) { // check if is JSON because client validation is an array
        contactErrors = JSON.parse(pError); // converting JSON to JS Object
    }

    if (contactErrors[0] === "name" || contactErrors[0] === "email" || contactErrors[0] === "human" || contactErrors[0] === "message") { // show client wrong inputs
        for (const error of contactErrors) {
            switch (error) {
                case "name":
                    contactInputName.classList.add("error");
                    break;
                case "email":
                    contactInputEmail.classList.add("error");
                    break;
                case "human":
                    contactSubmitForm.classList.remove("btn-success");
                    contactSubmitForm.classList.add("btn-danger");
                    break;
                case "message":
                    contactInputMessage.classList.add("error");
                    break;
            }
        }
        contactSubmitForm.disabled = false;
        contactMailFailure(false);
    } else if (contactErrors[0] === false) { // submmitted successfully
        contactSubmitForm.value = "Submitted";
        for (const element of contactInputFields) {
            element.setAttribute("readonly", "true");
        }
        contactMailSuccess();
    }
}

function isJSON(element) {
    try {
        JSON.parse(element); // parsing error --> no JSON
    } catch (exception) {
        return false;
    }
    return true;
}

function contactMailSuccess() {
    showContactMailSuccess();
    setTimeout(hideContactMailSuccess, 3000);
}

function contactMailFailure(serverside) {
    if (serverside === true) {
        showContactMailFailure();
        contactSubmitForm.value = "Server Error";
        contactSubmitForm.disabled = true;
        for (const element of contactInputFields) {
            element.setAttribute("readonly", "true");
        }
    } else {
        showContactMailFailure();
        contactSubmitForm.value = "Try again";
        contactSubmitForm.disabled = false;
    }
    setTimeout(hideContactMailFailure, 3000);
}

function showContactMailSuccess() {
    mailSendSuccessModal.show();
}

function hideContactMailSuccess() {
    mailSendSuccessModal.hide();
}

function showContactMailFailure() {
    mailSendFailureModal.show();
}

function hideContactMailFailure() {
    mailSendFailureModal.hide();
}

function contactCheckMail(email) {
    let pattern = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)])/;
    return pattern.test(email);
}