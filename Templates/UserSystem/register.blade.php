<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>

	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/loginRegister.css">
	<script type="module" src="../../static/js/registration.js" defer></script>
</head>
<body>
	<div class="form">
		<h1>Register</h1>

		<label for="username">Username</label>
		<input type="text" id="username" placeholder="Username">

		<label for="password_one">Password</label>
		<input type="password" id="password_one" placeholder="Password">

		<label for="password_two">Password Again</label>
		<input type="password" id="password_two" placeholder="Password again">

		<div id="error-message"></div>
		<button id="submit-button">Register</button>
	</div>
</body>
</html>
