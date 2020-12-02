<header class="profile-bar" id="profile_bar">
	<p>THIS IS WHERE PROFILE DATA WILL BE SHOWN</p>
	@if(\BK_Framework\SuperGlobal\Session::isLoggedIn())
		<a href="/logout">Logout</a>
	@endif
</header>
