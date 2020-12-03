<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/add.css">
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/main.css">
	<script type="module" src="../../static/js/editAnswer.js" defer></script>
</head>

<body>

@include("header")
@include("navbar")

<div class="container">
	<h1 id="title" data-id={{$answerData->get("id")}}  data-questionid={{$questionId}}>Edit your answer!</h1>
	<textarea name="message" id="message" cols="30" rows="10"
			  form="add-question-form">{{$answerData->get("message")}}</textarea><br>
	<input id="submit-button" type="submit" value="Edit answer">
	<div id="error-container"></div>
</div>
</body>
</html>
