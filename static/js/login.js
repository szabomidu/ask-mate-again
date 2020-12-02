import {dataHandler} from "./datahandler.js";

init();


function init() {
    document.querySelector("#submit-button").addEventListener("click", validateUserInput);
}

function validateUserInput() {
    const username = document.querySelector("#username").value;
    const password = document.querySelector("#password").value;
    const errorContainer = document.querySelector("#error-message");

    if (checkNonEmptyFields(username, password, errorContainer)) {
        const user = {username: username, password: password};
        dataHandler._api_post("/api/login", user, redirectToMainPage, displayErrorMessages);
    }
}

function checkNonEmptyFields(username, password, errorContainer) {
    if (username === "" || password === "") {
        errorContainer.innerHTML = "Please fill out all fields!";
        errorContainer.classList.add('error');
        return false;
    }

    return true;
}

function redirectToMainPage(data) {
    if (data["state"] === "success") {
        document.querySelector("body").innerHTML = "Successful login, redirecting to main page..."
        setTimeout(() => {window.location.replace("/")}, 2500)
    }
    else if (data["state"] === "invalid") {
        document.querySelector("#error-message").innerHTML = "Invalid username or password!";
    }
}

function displayErrorMessages() {
    console.log("Response not JSON");
}

