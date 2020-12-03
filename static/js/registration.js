import {dataHandler} from "./datahandler.js";

init();

function init() {
    document.querySelector("#submit-button").addEventListener("click", validateUserData)
}

function validateUserData() {
    const username = document.querySelector("#username").value;
    const passwordOne = document.querySelector("#password_one").value;
    const passwordTwo = document.querySelector("#password_two").value;
    const errorContainer = document.querySelector("#error-message");

    if (checkNonEmptyFields(username, passwordOne, passwordTwo, errorContainer)) {
        if (checkEqualPasswords(passwordOne, passwordTwo, errorContainer)) {
            const user = {username: username, passwordOne: passwordOne, passwordTwo: passwordTwo};
            dataHandler._api_post("/api/register", user, redirectToMainPage, displayErrorMessages);
        }
    }
}

function checkNonEmptyFields(userInput, passwordOne, passwordTwo, errorContainer) {
    if (userInput === "" || passwordOne === "" || passwordTwo === "") {
        errorContainer.innerHTML = "Please fill out all fields!";
        errorContainer.classList.add('error');
        return false;
    }
    return true;
}

function checkEqualPasswords(passwordOne, passwordTwo, errorContainer) {
    if (passwordOne !== passwordTwo) {
        errorContainer.innerHTML = "Mismatched passwords!";
        errorContainer.classList.add('error');
        return false;
    }
    return true;
}

function redirectToMainPage(data) {
    if (data["state"] === "success") {
        document.querySelector("body").innerHTML = "<p class='redirect'> Successful registration, redirecting to main page... </p>"
        setTimeout(() => {
            window.location.replace("/")
        }, 1000)
    } else if (data["state"] === "taken") {
        document.querySelector("#error-message").innerHTML = "Username is already taken";
        document.querySelector("#error-message").classList.add('error');
    }
}

function displayErrorMessages() {
    console.log("Response not JSON")
}
