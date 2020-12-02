<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamper Plumber Inc.</title>

    <link rel="stylesheet" type="text/css" href="../static/stylesheets/main.css">
</head>

<body>
@include("header")
@include("navbar")

<div>
    <p>{{$questionData->get("title")}}</p>
    <p>{{$questionData->get("message")}}</p>
</div>
<div>
    @foreach($answers as $answer)
        <p>{{$answer->get("message")}}</p>
        <p>{{$answer->get("submission_time")}}</p>
        <p>{{$answer->get("vote_number")}}</p><br>
    @endforeach
</div>
</body>
</html>
