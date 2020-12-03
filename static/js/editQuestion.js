import {dataHandler} from "./datahandler.js";

init();


function init() {
    document.querySelector("#submit-button").addEventListener("click", validateUserInput)
}


function validateUserInput() {
    const title = document.querySelector("#title").value;
    const message = document.querySelector("#message").value;
    const errorContainer = document.querySelector("#error-container");
    const id = document.querySelector("#title").dataset.id;

    if (checkNonEmptyFields(title, message, errorContainer)) {
        const question = {title: title, message: message};
        dataHandler._api_put('/api/edit-question?id=' + id, question, redirectToMainPage, displayErrorMessages);
    }
}

function checkNonEmptyFields(title, message, errorContainer) {
    if (title === "" || message === "") {
        errorContainer.innerHTML = "Please fill out all fields!";
        errorContainer.classList.add('error');
        return false;
    }
    return true;
}

function redirectToMainPage(data) {
    if (data["state"] === "success") {
        document.querySelector("body").innerHTML = "<p class='redirect'> Successful editing, redirecting to question page... </p>"
        setTimeout(() => {window.location.replace("/question?id=" + data["id"])}, 1500)
    }
    else if (data["state"] === "failed") {
        const errorContainer = document.querySelector("#error-container");
        errorContainer.innerHTML = "Failed to edit question, please try again!";
        errorContainer.classList.add('error');
    }
}

function displayErrorMessages() {
    console.log("Response not JSON");
}