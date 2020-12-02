<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
	<link rel="stylesheet" type="text/css" href="../../static/stylesheets/loginRegister.css">
</head>
<body>
<div class="form">
	<div class="title"><h1>Add tag</h1></div>

	<select name="tags" id="tags">
		@foreach($tags as $tag)
			<option value="{{$tag->get("name")}}"></option>
		@endforeach
	</select>

	<input type="text" placeholder="Custom Tag">
	<div class="submit">
		<button type="submit" id="submit-button">Add</button>
	</div>

</div>
</body>
</html>
