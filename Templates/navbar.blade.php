<!--suppress ALL -->
<div class="navbar">
	<ul>
		<li><a href="/register">Users</a></li>
		<li><a href="/register">My Profile</a></li>
		<li><a href="/register">Registration</a></li>
		<li><a href="/register">Login</a></li>
		<li><a href="/register">Tags</a></li>
		<li><a href="/register">Show all questions</a></li>
		@if(\BK_Framework\SuperGlobal\Session::isLoggedIn())
			<li><a href="/add-question">Add question</a></li>
		@endif
	</ul>
</div>


{{--	<ul>--}}
{{--		<li><a style="text-decoration: none" href="{{ url_for('users') }}">Users</a></li>--}}
{{--		<li><a style="text-decoration: none" href="{{ url_for('user_page', user_id=user_id) }}">My profile</a></li>--}}
{{--		<li><a style="text-decoration: none" href="{{ url_for('registration') }}">Registration</a></li>--}}
{{--		<li><a style="text-decoration: none" href="{{ url_for('login') }}">Login</a></li>--}}
{{--		<li><a style="text-decoration: none" href="{{ url_for('tags', source="welcome_page") }}">Tags</a></li>--}}
{{--		<li style="text-align: center"><a href="{{ url_for('display_list') }}">Show all questions</a></li>--}}
{{--	</ul>--}}
