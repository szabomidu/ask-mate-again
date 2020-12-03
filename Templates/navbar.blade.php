<!--suppress ALL -->
<div class="navbar">
    <ul>

        @if (!\BK_Framework\SuperGlobal\Session::isLoggedIn())
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Registration</a></li>
        @endif

        @if (\BK_Framework\SuperGlobal\Session::isLoggedIn())
            <li><a href="#">Users</a></li>
            <li><a href="/add-question">Add question</a></li>
            <li><a href="/all-tags">Tags</a></li>
        @endif

        <li><a href="/all">Show all questions</a></li>
    </ul>
</div>
