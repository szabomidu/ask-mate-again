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

<div id="tag-container">
	@foreach($tags as $tag)
		<div class="tag-card">
			<p>{{$tag->get("name")}}</p>
		</div>
	@endforeach
</div>

<div>
    <p>{{$questionData->get("title")}}</p>
    <p>{{$questionData->get("message")}}</p>
</div>
</body>
</html>
