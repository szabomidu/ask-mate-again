<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamper Plumber Inc.</title>

    <link rel="stylesheet" type="text/css" href="../static/stylesheets/main.css">
</head>

<body>
@include("header")

<div class="welcome-text">
    <h1 class="main-text">Welcome to the Gamper Plumber Inc. by Crosswalk Transform</h1>
    <h2 class="text"> On this page you can see all questions on this website, <br>
        feel free to search between among us</h2>
</div>

@include("navbar")

<div>
    <table class="content-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Submission Time</th>
            <th>Title</th>
            <th>Message</th>
            <th>Image</th>
            <th>Vote Number</th>
        </tr>
        </thead>

        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{$question->get("id")}}</td>
                {{--				<td>{{ $question->get("submission_time") }}</td>--}}
                <td>SUBMISSION TIME</td>
                <td>{{$question->get("title")}}</td>
                <td>{{$question->get("message")}}</td>
                <td>IMAGE</td>
                <td>{{$question->get("vote_number")}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
