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

function removeTagCard(data) {
    [... document.querySelectorAll(".delete-tag")]
        .forEach((element) => {
            if (parseInt(element.dataset.id) === data['tagId']) {
                console.log(element);
                element.parentElement.remove();
            }
        })
    if (document.querySelector('#tag-container ul').childElementCount === 0) {
        document.querySelector('#tag-container').remove();
    }
}

function displayErrorMessages() {
    console.log("Response not JSON");
}

