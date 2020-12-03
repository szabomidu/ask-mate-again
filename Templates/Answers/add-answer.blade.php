<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/add.css">
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/main.css">
</head>

<body>

@include("header")
@include("navbar")
<div class="container">
	<h1>Add your answer!</h1>
	<form action="/api/add-answer/{{$questionId}}" id="add-answer-form" method="POST">
		<textarea name="message" id="add-answer-textarea" cols="30" rows="10" form="add-answer-form" placeholder="Answer" required></textarea><br>
		<input type="submit" value="Add answer">
	</form>
</div>
</body>
