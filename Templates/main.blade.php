<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gamper Plumber Inc.</title>
</head>

<body>
@include("header")
<h1 class="header">Welcome to the Gardening Q&A by Crosswalk Transform</h1>
<h3 class="text"> This is a qreat place for beginner gardeners, <br>
	here you can find the answers you are looking for and help others with your knowledge!</h3>

@include("navbar")
<div class="table_div">
	<table class="content-table">
		<thead>
		<tr class="head" style="text-align: center">
			<th class="th">ID</th>
			<th class="th">Submission Time</th>
			<th class="th">Title</th>
			<th class="th">Message</th>
			<th class="th">Image</th>
			<th class="th">Vote Number</th>
		</tr>
		</thead>

		<tbody>

		@foreach($questions as $question)
			<tr class="active-row">
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
