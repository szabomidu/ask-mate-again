<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamper Plumber Inc.</title>

    <link rel="stylesheet" type="text/css" href="../../static/stylesheets/question.css">
</head>

<body>

@include("header")

<div class="title">
    <p>{{$questionData->get("title")}}</p>
</div>

@include("navbar")

<div class="question">
    <div id="tag-container">
        <ul>
            <li>Tag1 <div class="delete-tag">x</div></li>
            <li>Tag1 <div class="delete-tag">x</div></li>
            <li>Taadg1 <div class="delete-tag">x</div></li>
            <li>Taadg1 <div class="delete-tag">x</div></li>
            <li>Twaddwadag1 <div class="delete-tag">x</div></li>
            <li>Twaddwadag1 <div class="delete-tag">x</div></li>
            <li>Twaddwadag1 <div class="delete-tag">x</div></li>
            <li>Tadwg1 <div class="delete-tag">x</div></li>
            <li>Tadwg1 <div class="delete-tag">x</div></li>
            <li>Tadwdg1 <div class="delete-tag">x</div></li>

{{--            @foreach($tags as $tag)--}}
{{--                <li>{{$tag->get("name")}}</li>--}}
{{--            @endforeach--}}
        </ul>
    </div>

    <div class="description">
        <p>{{$questionData->get("message")}}</p>
    </div>
    <div class="links">
        <a href="/addtag">Add tag</a>
        <a href="/addtag">Add answer</a>
        <a href="/edit-question?id={{\BK_Framework\SuperGlobal\Get::get("id")}}">Edit question</a>
        <a href="/delete-question?id={{\BK_Framework\SuperGlobal\Get::get("id")}}">Delete question</a>
    </div>
</div>



<div class="answers">
    <h1>Answers for this question:</h1>
    @foreach($answers as $answer)
        <div class="answer">
            <div class="answer-infos">
                <div class="time">
                    <p>{{$answer->get("submission_time")}}</p>
                </div>
                <div class="votes">
                    <p>{{$answer->get("vote_number")}} people likes this answer.</p>
                </div>
            </div>
            <div class="answer-message">
                <p>{{$answer->get("message")}}</p>
            </div>

        </div>

    @endforeach
</div>
</body>
</html>
