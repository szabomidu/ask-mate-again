<div class="navbar">
	<ul>

		@if (\BK_Framework\SuperGlobal\Session::isLoggedIn())
			<li><a href="/register">Users</a></li>
			<li><a href="/register">My Profile</a></li>
		@endif

		<li><a href="/register">Registration</a></li>
		<li><a href="/login">Login</a></li>

		@if (\BK_Framework\SuperGlobal\Session::isLoggedIn())
			<li><a href="/tags">Tags</a></li>
		@endif

		<li><a href="/all">Show all questions</a></li>
	</ul>
</div>