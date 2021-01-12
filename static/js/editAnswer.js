import {dataHandler} from "./datahandler.js";

init();


function init() {
    document.querySelector("#submit-button").addEventListener("click", validateUserInput)
}


function validateUserInput() {
    const message = document.querySelector("#message").value;
    const errorContainer = document.querySelector("#error-container");
    const id = document.querySelector("#title").dataset.id;
    const questionId = document.querySelector("#title").dataset.questionid;

    if (checkNonEmptyFields(message, errorContainer)) {
        const answer = {message: message, questionId: questionId};
        dataHandler._api_put('/api/edit-answer?id=' + id, answer, redirectToMainPage, displayErrorMessages);
    }
}

function checkNonEmptyFields(message, errorContainer) {
    if (message === "") {
        errorContainer.innerHTML = "Please fill out all fields!";
        errorContainer.classList.add('error');
        return false;
    }
    return true;
}

function redirectToMainPage(data) {
    if (data["state"] === "success") {
        document.querySelector("body").innerHTML = "<p class='redirect'> Successful editing, redirecting to question page... </p>"
        setTimeout(() => {window.location.replace("/question?id=" + data["id"])}, 1000)
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
