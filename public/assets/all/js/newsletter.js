// constants
const newsletterForm = document.querySelector("#newsletterForm");
const newsletterSubmitForm = document.querySelector("#newsletterSubmitForm");
const newsletterSuccessMessage = document.querySelector("#newsletterSuccessMessage");
const newsletterFailureMessage = document.querySelector("#newsletterFailureMessage");

// vars
let newsletterInputEmail = document.querySelector("#newsletterInputEmail");
let newsletterInputHuman = document.querySelector("#newsletterInputHuman");

let newsletterInputFields = [
    newsletterInputEmail,
    newsletterInputHuman
];

let newsletterErrors = [] // variable for error handling

// onload functioncs


// event listener

newsletterForm.addEventListener("submit", function (e) {
    e.preventDefault(); // prevent default behaviour
    newsletterErrors = [];
    newsletterSubmitForm.disabled = true;
    newsletterSubmitForm.value = "Validating";

    // clean up inputs
    for (const element of newsletterInputFields) {
        element.value.trim();
    }

    // error handling - client side
    for (const element of newsletterInputFields) {
        if (element.value === "" && element.getAttribute("name") !== "human") {
            newsletterErrors.push(element.getAttribute("name"));
        } else if (element.value.length > 5000 && element.getAttribute("name") !== "human") {
            newsletterErrors.push(element.getAttribute("name"));
        } else if (!newsletterCheckMail(element.value) && element.getAttribute("name") === "email") {
            newsletterErrors.push(element.getAttribute("name"));
        } else if (element.value !== "" && element.getAttribute("name") === "human") {
            newsletterErrors.push(element.getAttribute("name"));
        }
    }

    // submitting form via ajax
    if (newsletterErrors.length === 0) {
        newsletterSubmitForm.value = "Adding";
        let formData = new FormData(newsletterForm); // get input field as FormData Object
        let actionUrl = "/assets/all/php/newsletterRegistration.php"; // path to php script
        try {
            $.ajax({
                type: "POST",
                url: actionUrl, // url jquery send the form
                enctype: "multipart/form-data",
                data: formData, // data that will be sent
                processData: false, // false because otherwise jquery would try to convert data to String --> Error because data is FormData Object
                contentType: false, // false because otherwise jquery would try to convert data to String --> Error because data is FormData Object
                success: function (backendError) {
                    newsletterErrorHandlerForClient(backendError); // errorHandler because some backend could throw some errors
                },
                error: function () {
                    newsletterFailure(true); // ajax error
                }
            });
        } catch (e) {
            newsletterFailure(false);
        }
    } else {
        newsletterFailure(false);
        newsletterErrorHandlerForClient(newsletterErrors); // client side error handling
    }
});


// functions
function newsletterErrorHandlerForClient(pError) {
    // remove error class because of previous validation
    for (const element of newsletterInputFields) {
        element.classList.remove("error");
    }
    hideNewsletterSuccess();
    hideNewsletterFailure();

    if (isJSON(pError)) { // check if is JSON because client validation is an array
        newsletterErrors = JSON.parse(pError); // converting JSON to JS Object
    }

    if (newsletterErrors[0] === "email" || newsletterErrors[0] === "emailAlreadyUsed") { // show client wrong inputs
        for (const error of newsletterErrors) {
            switch (error) {
                case "email":
                    newsletterInputEmail.classList.add("error");
                    newsletterFailureMessage.textContent = "Check your Email again";
                    break;
                case "emailAlreadyUsed":
                    newsletterInputEmail.classList.add("error");
                    newsletterFailureMessage.textContent = "Email already registered";
                    break;
            }
        }
        newsletterSubmitForm.disabled = false;
        newsletterFailure(false);
    } else if (newsletterErrors[0] === false){ // submmitted successfully
        newsletterSubmitForm.value = "Added";
        for (const element of newsletterInputFields) {
            element.setAttribute("readonly", "true");
        }
        newsletterSuccess();
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

function newsletterSuccess() {
    newsletterSuccessMessage.textContent = "Email added to my newsletter list";
    newsletterSubmitForm.classList.remove("btn-danger");
    newsletterSubmitForm.classList.add("btn-success");
    showNewsletterSuccess();
}

function newsletterFailure(serverside) {
    if (serverside === true) {
        newsletterSubmitForm.value = "Server Error";
        newsletterSubmitForm.disabled = true;
        newsletterSubmitForm.classList.remove("btn-primary");
        newsletterSubmitForm.classList.add("btn-danger");
        for (const element of newsletterInputFields) {
            element.setAttribute("readonly", "true");
        }
    } else {
        showNewsletterFailure();
        newsletterSubmitForm.classList.remove("btn-primary");
        newsletterSubmitForm.classList.add("btn-danger");
        newsletterSubmitForm.value = "Try again";
        newsletterSubmitForm.disabled = false;
    }
}

function showNewsletterSuccess() {
    newsletterSuccessMessage.style.display = "block";
}

function showNewsletterFailure() {
    newsletterFailureMessage.style.display = "block";
}

function hideNewsletterSuccess() {
    newsletterSuccessMessage.style.display = "none";
}

function hideNewsletterFailure() {
    newsletterFailureMessage.style.display = "none";
}


function newsletterCheckMail(email) {
    let pattern = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)])/;
    return pattern.test(email);
}