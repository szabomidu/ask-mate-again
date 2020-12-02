<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/add.css">
</head>

<body>

@include("header")
@include("navbar")
<h1>Add your answer!</h1>
<form action="/api/add-answer/{{$questionId}}" id="add-answer-form" method="POST">
	<textarea name="message" id="message" cols="30" rows="10" form="add-answer-form" placeholder="Answer" required></textarea><br>
	<input type="submit" value="Add answer">
</form>
</body>