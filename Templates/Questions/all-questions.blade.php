<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamper Plumber Inc.</title>

    <link rel="stylesheet" type="text/css" href="../../static/stylesheets/main.css">
</head>

<body>
@include("header")

<div class="welcome-text">
    <h1 class="main-text">Welcome to the Gamper Plumber Inc. by Crosswalk Transform</h1>
    <h2 class="text"> On this page you can see all asked questions connecting to plumbing issues, <br>
        feel free to search among us...</h2>
</div>

@include("navbar")

<div>
    <table class="content-table">
        <thead>
        <tr>
            <th class="id">ID</th>
            <th class="time">Submission Time</th>
            <th class="title">Title</th>
            <th class="message">Message</th>
            <th class="img">Image</th>
            <th class="vote">Vote Number</th>
        </tr>
        </thead>

        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{$question->get("id")}}</td>
                {{--				<td>{{ $question->get("submission_time") }}</td>--}}
                <td>{{ $question->get("submission_time") }}</td>
                <td><a href="/question?id={{$question->get("id")}}">{{$question->get("title")}}</a></td>
                <td>{{$question->get("message")}}</td>
                <td><img height="80" src="../../static/pictures/plumber-6.png" alt=""></td>
                <td>{{$question->get("vote_number")}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
