<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamper Plumber Inc.</title>

    <link rel="stylesheet" type="text/css" href="../../static/stylesheets/question.css">
    <script type="module" src="../../static/js/questionPage.js" defer></script>

</head>

<body>

@include("header")

<div class="title">
    <p>{{$questionData->get("title")}}</p>
</div>

@include("navbar")

<div class="question">
    @if($tags)
    <div id="tag-container">
        <ul>
            @foreach($tags as $tag)
                <li>{{$tag->get("name")}}
                    <div class="delete-tag" data-id="{{$tag->get("id")}}">x</div>
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="description">
        <p>{{$questionData->get("message")}}</p>
    </div>
    <div class="links">
        <a href="/add-tag/{{\BK_Framework\SuperGlobal\Get::get("id")}}">Add tag</a>
        <a href="/add-answer/{{$questionData->get("id")}}">Add answer</a>
        <a href="/edit-question?id={{\BK_Framework\SuperGlobal\Get::get("id")}}">Edit question</a>
        <a href="/delete-question?id={{\BK_Framework\SuperGlobal\Get::get("id")}}">Delete question</a>
    </div>
</div>


<div class="answers">
    @if (count($answers) > 0)
        <h1>Answers for this question:</h1>
    @else
        <h1>There are no answers for this questions. Be the first one to answer!</h1>
    @endif

    @foreach($answers as $answer)
        <div class="answer">
            <div class="answer-infos">
                <div class="time">
                    <p>{{$answer->get("submission_time")}}</p>
                </div>
                <div class="votes">
                    <p>{{$answer->get("vote_number")}} people likes this answer.</p>
                </div>
                <a href="/edit-answer?id={{$answer->get("id")}}&questionId={{\BK_Framework\SuperGlobal\Get::get("id")}}">Edit answer</a>
                <p data-answerid="{{$answer->get("id")}}" class="delete-answer-button">Delete answer</p>
            </div>
            <div class="answer-message">
                <p>{{$answer->get("message")}}</p>
            </div>

        </div>

    @endforeach
</div>
</body>
</html>
