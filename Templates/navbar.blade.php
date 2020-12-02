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
