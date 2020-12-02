<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamper Plumber Inc.</title>

    <link rel="stylesheet" type="text/css" href="../../static/stylesheets/main.css">
</head>

<body>
@include("header")
@include("navbar")

<div>

                <p>{{$questionData->get("title")}}</p>
                <p>{{$questionData->get("message")}}</p>

</div>
</body>
</html>
