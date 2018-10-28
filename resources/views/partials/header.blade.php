@if (Request::is('/'))
    {{$item['category'] = ''}}
@endif

<nav class="navbar navbar-expand navbar-light bg-transparent">
    <a class="navbar-brand" href="{{route('store.index')}}">Dancemaker Apperal</a>
    <ul class="navbar-nav">

        <li class="nav-item">
            {{--<a class="nav-link" href="{{route('other.about')}}">Shoes</a>--}}
            <a class="nav-link" href="#">Shoes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Dresses</a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">Tights</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Leotards</a>
        </li>

    </ul>
    <ul class="navbar-nav ml-auto">
        @if(!Auth::check())
            <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
            <li><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
        @else
            <li><a href="{{ route('admin.index') }}" class="nav-link">All Items</a></li>
            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="nav-link">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </li>
        @endif
    </ul>
</nav>


