<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/loginRegister.css">
	<script type="module" src="../../static/js/add-tag.js" defer></script>
</head>
<body>
<div class="form">
	<div class="title"><h1>Add tag</h1></div>

	<button id="tag-input-button">I would like to add new tag</button>
	<button id="tag-select-button">I would like to select a tag</button>

	<select name="tags" id="tags" class="hide-both">
		@foreach($tags as $tag)
			<option value="{{$tag->get("id")}}">{{$tag->get("name")}}</option>
		@endforeach
	</select>

	<input id="tag-input-field" type="text" placeholder="Custom Tag" class="hide-both">
	<div class="submit">
		<button type="submit" id="submit-button">Add</button>
	</div>

</div>
</body>
</html>
