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
    <table class="content-table">
        <thead>
        <tr>
            <th>TAG NAME</th>
            <th>QUESTIONS</th>
        </tr>
        </thead>

        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{$tag->get("name")}}</td>
                <td>{{$tag->get("tag_number")}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
