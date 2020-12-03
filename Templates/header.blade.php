<header class="profile-bar" id="profile_bar">
	@if (\BK_Framework\SuperGlobal\Session::isLoggedIn())
		<div class="header-links">
			<a href="#">My Profile</a>
			<div class="logged-in">You are logged in as: {{ \BK_Framework\SuperGlobal\Session::get('userName') }}</div>
			<a href="/logout">Logout</a>
		</div>
	@endif
</header>
