<!--suppress ALL -->
<div class="navbar">
    <ul>

        @if (\BK_Framework\SuperGlobal\Session::isLoggedIn())
            <li><a href="/register">Users</a></li>
            <li><a href="/register">My Profile</a></li>
        @endif

        @if (!\BK_Framework\SuperGlobal\Session::isLoggedIn())
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Registration</a></li>
        @endif

        @if (\BK_Framework\SuperGlobal\Session::isLoggedIn())
            <li><a href="/tags">Tags</a></li>
            <li><a href="/add-question">Add question</a></li>
            <li><a href="/all-tags">Show all tags</a></li>
        @endif

        	<li><a href="/all">Show all questions</a></li>

    </ul>
</div>
