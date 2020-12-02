import {dataHandler} from "./datahandler.js";

init();


function init() {
    [... document.querySelectorAll(".delete-tag")]
        .forEach(() => {addEventListener('click', deleteTag)})
}

function deleteTag() {
    const tagId = this.dataset.id;
    dataHandler._api_delete("/api/delete-tag/" + tagId, "", removeTagCard, displayErrorMessages);

}

function removeTagCard() {

}

function displayErrorMessages() {

}

