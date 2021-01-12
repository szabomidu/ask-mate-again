<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/addTag.css">
	<script type="module" src="../../static/js/add-tag.js" defer></script>
</head>
<body>
<div class="form">
	<div class="title"><h1>Add tag</h1></div>

	@if(0 < count($tags))
		<button class="tag-button" id="tag-input-button">Add new tag</button>
		<button class="tag-button active" id="tag-select-button">Select from existing tags</button>

		<div class="box">
			<select name="tags" id="tags">
				@foreach($tags as $tag)
					<option value="{{$tag->get("id")}}">{{$tag->get("name")}}</option>
				@endforeach
			</select>
		</div>
	@endif

	<input id="tag-input-field" type="text" placeholder="Custom Tag" @if(0 < count($tags))class="hide-both"@endif>

	<div class="submit">
		<button type="submit" id="submit-button">Add</button>
	</div>

</div>
</body>
</html>
