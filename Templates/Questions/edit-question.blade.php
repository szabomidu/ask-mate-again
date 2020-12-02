<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamper Plumber Inc.</title>
    <link rel="stylesheet" type="text/css" href="../../static/stylesheets/add.css">
    <script type="module" src="../../static/js/editQuestion.js" defer></script>
</head>

<body>

@include("header")
@include("navbar")

<h1>Edit your question!</h1>
<input type="text" id="title" name="title" value={{$questionData->get("title")}} data-id={{$questionData->get("id")}} required><br>
<textarea name="message" id="message" cols="30" rows="10" form="add-question-form"
          required>{{$questionData->get("message")}} </textarea><br>
<input id="submit-button" type="submit" value="Edit question">
<div id="error-container"></div>
</body>


