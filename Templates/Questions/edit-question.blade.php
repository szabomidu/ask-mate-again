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
<h1>Add your question!</h1>
<form action="/api/edit-question" id="edit-question-form" method="POST">
    <input type="text" id="title" name="title" value={{$questionData->get("title")}} required><br>
    <textarea name="message" id="message" cols="30" rows="10" form="add-question-form" required>{{$questionData->get("message")}} </textarea><br>
    <input type="submit" value="Edit question">
</form>
</body>


