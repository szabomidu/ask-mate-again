import {dataHandler} from "./datahandler.js";

init();


function init() {
    [... document.querySelectorAll(".delete-tag")]
        .forEach((element) => {element.addEventListener('click', deleteTag)})
}

function deleteTag() {
    const tagId = this.dataset.id;
    const urlParams = new URLSearchParams(window.location.search);
    const questionId = urlParams.get('id');
    const tag = {tagId: tagId, questionId: questionId};
    dataHandler._api_delete("/api/delete-tag", tag, removeTagCard, displayErrorMessages);
}

function removeTagCard() {

}

function displayErrorMessages() {

}

