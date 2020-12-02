import {dataHandler} from "./datahandler.js";

init();

function init() {
    let tags = document.querySelector("#tags");
    let tagInputField = document.querySelector("#tag-input-field");
    document.querySelector("#tag-select-button").addEventListener("click", function() {displayDropdown(tags, tagInputField)});
    document.querySelector("#tag-input-button").addEventListener("click", function() {displayInputField(tags, tagInputField)});
    document.querySelector("#submit-button").addEventListener("click", function() {addTag(tags, tagInputField)})
}

function addTag(tags, tagInputField) {
    let path = window.location.pathname;
    let questionId = path.split("/")[path.split("/").length-1];
    if (tags.classList.contains("display-item")) {
        let tagId = tags.options[tags.selectedIndex].value;
        dataHandler._api_post(`/api/add-tag/${questionId}/${tagId}`, "", redirectToQuestionPage)
    } else {
        dataHandler._api_post(`/api/add-tag/${questionId}`, {name: tagInputField.value}, redirectToQuestionPage)
    }
}

function redirectToQuestionPage(data) {
    window.location.replace(`/question?id=${data["id"]}`);
}

function displayInputField(tags, tagInputField) {
    tags.classList.remove("hide-both");
    tags.classList.remove("display-item");
    tags.classList.add("hide-item");
    tagInputField.classList.remove("hide-both");
    tagInputField.classList.remove("hide-item");
    tagInputField.classList.add("display-item");
}


function displayDropdown(tags, tagInputField) {
    tagInputField.classList.remove("hide-both");
    tagInputField.classList.remove("display-item");
    tagInputField.classList.add("hide-item");
    tagInputField.value = "";
    tags.classList.remove("hide-both");
    tags.classList.remove("hide-item");
    tags.classList.add("display-item");
}
