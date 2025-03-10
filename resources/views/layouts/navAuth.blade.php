<ul class="nav navbar-nav pull-right">
    @if(Auth::guest())
        <li>
            <a href="{{route('register')}}">Register
                <span class=glyphicon glyphicon-pencil></span>
        </li>

        <li>
            <a href="{{route('login')}}">Login
                <span class=glyphicon glyphicon-log-in></span>
        </li>
    @else
        <li>
            <a href="{{route('logout')}}">Logout
                <span class=glyphicon glyphicon-log-out></span>
        </li>
    @endif
</ul>