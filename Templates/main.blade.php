<h1>Template</h1>

@foreach($questions as $question)
	<p>{{$question->get("title")}}</p>
	<p>{{$question->get("message")}}</p>
@endforeach
