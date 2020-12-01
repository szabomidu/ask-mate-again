init();

function init() {
	document.querySelector("#submit-button").addEventListener("click", validateUserData)
}

function validateUserData() {
	const userInput = document.querySelector("#username").value;
	const passwordOne = document.querySelector("#password_one").value;
	const passwordTwo = document.querySelector("#password_two").value;
	const errorContainer = document.querySelector("#error-message");

	if (checkNonEmptyFields(userInput,  passwordOne, passwordTwo, errorContainer)) {

		checkEqualPasswords(passwordOne, passwordTwo, errorContainer);

	}

}

function checkNonEmptyFields(userInput, passwordOne, passwordTwo, errorContainer) {

	if (userInput === "" || passwordOne === "" || passwordTwo === "") {
		errorContainer.innerHTML = "Please fill out all fields!";
		return false;
	}

	return true;

}

function checkEqualPasswords(passwordOne, passwordTwo, errorContainer) {

	if (passwordOne !== passwordTwo) {
		errorContainer.innerHTML = "Mismatched passwords!";
		return false;
	}

}
