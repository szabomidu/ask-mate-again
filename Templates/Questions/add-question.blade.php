<h1>Add Question</h1>

<form action="/api/add-question" id="add-question-form" method="POST">
	<label for="title">Question title</label>
	<input type="text" id="title" name="title">
	<label for="message">Question Body</label>
	<textarea name="message" id="message" cols="30" rows="10" form="add-question-form"></textarea>
	<input type="submit" value="Ask">
</form>

