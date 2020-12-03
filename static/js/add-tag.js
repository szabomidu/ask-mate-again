import {dataHandler} from "./datahandler.js";

init();

function init() {
    let tags = document.querySelector("#tags");
    let tagInputField = document.querySelector("#tag-input-field");

	const tagSelectButton = document.querySelector("#tag-select-button");
	if (tagSelectButton !== null) {
		tagSelectButton.addEventListener("click", function() {displayDropdown(tags, tagInputField)});
	}

	const tagInputButton = document.querySelector("#tag-input-button");
	if (tagInputButton !== null) {
		tagInputButton.addEventListener("click", function() {displayInputField(tags, tagInputField)});
	}

    document.querySelector("#submit-button").addEventListener("click", function() {addTag(tags, tagInputField)})
}

function addTag(tags, tagInputField) {
    let path = window.location.pathname;
    let questionId = path.split("/")[path.split("/").length-1];
    if (tags === null || tags.classList.contains("hide-both")) {
		dataHandler._api_post(`/api/add-tag/${questionId}`, {name: tagInputField.value}, redirectToQuestionPage)
    } else {
		let tagId = tags.options[tags.selectedIndex].value;
		dataHandler._api_post(`/api/add-tag/${questionId}/${tagId}`, "", redirectToQuestionPage)
    }
}

function redirectToQuestionPage(data) {
    window.location.replace(`/question?id=${data["id"]}`);
}

function displayInputField(tags, tagInputField) {
    tags.classList.add("hide-both");
    tagInputField.classList.remove("hide-both");
}


function displayDropdown(tags, tagInputField) {
    tagInputField.value = "";
	tags.classList.remove("hide-both");
	tagInputField.classList.add("hide-both");
}
