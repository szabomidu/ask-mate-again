<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/main.css">
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/add.css">
</head>

<body>

	@include("header")
	@include("navbar")
	<div class="container">
		<h1>Add your question!</h1>
		<form class="form" action="/api/add-question" id="add-question-form" method="POST">
			<input type="text" id="title" name="title" placeholder="Title" required><br>
			<textarea name="message" id="message" cols="30" rows="10" form="add-question-form" placeholder="Question" required></textarea><br>
			<input type="submit" value="Add question">
		</form>
	</div>
</body>


