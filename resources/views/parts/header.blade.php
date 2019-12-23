<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(Request::is('/')) active @endif">
                    <a class="nav-link" href="/">Main</a>
                </li>
                <li class="nav-item @if(Request::is('task*')) active @endif">
                    <a class="nav-link" href="{{ action('TasksController@index') }}">Tasks</a>
                </li>
            </ul>
        </div>
    </nav>
</header>