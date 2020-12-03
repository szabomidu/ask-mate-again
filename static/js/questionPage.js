import {dataHandler} from "./datahandler.js";

init();


function init() {
	[...document.querySelectorAll(".delete-tag")]
		.forEach((element) => {
			element.addEventListener('click', deleteTag)
		});
	[...document.querySelectorAll(".delete-answer-button")]
		.forEach((element) => {
			element.addEventListener('click', deleteAnswer)
		})
}

function deleteTag() {
	const tagId = this.dataset.id;
	const urlParams = new URLSearchParams(window.location.search);
	const questionId = urlParams.get('id');
	const tag = {tagId: tagId, questionId: questionId};
	dataHandler._api_delete("/api/delete-tag", tag, removeTagCard, displayErrorMessages);
}

function removeTagCard(data) {
	[...document.querySelectorAll(".delete-tag")]
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

function deleteAnswer() {
	const answerId = this.dataset.answerid;
	dataHandler._api_delete(`/api/delete-answer/${answerId}`, "", removeAnswerCard, displayErrorMessages)
}

function removeAnswerCard(data) {
	const answerId = data["answerId"];
	[...document.querySelectorAll(".answer")]
		.forEach((element) => {
			if (parseInt(element.querySelector(".answer-infos .delete-answer-button").dataset.answerid) === answerId)
				element.remove();
			}
		)
	if ([...document.querySelectorAll(".answer")].length === 0) {
		document.querySelector('.answers h1').innerHTML = "There are no answers for this questions. Be the first one to answer!";
	}
}

function displayErrorMessages() {
	console.log("Response not JSON");
}

