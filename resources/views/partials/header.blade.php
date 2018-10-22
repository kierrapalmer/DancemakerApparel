@if (Request::is('/'))
    {{$item['category'] = ''}}
@endif

<nav class="navbar navbar-expand navbar-light bg-transparent">
    <a class="navbar-brand" href="{{route('store.index')}}">Dancemaker Apperal</a>
    <ul class="navbar-nav">

        <li class="nav-item">
            {{--<a class="nav-link" href="{{route('other.about')}}">Shoes</a>--}}
            <a class="nav-link {{$item->category == 'Shoes' ? 'active' : null }}" href="#">Shoes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{$item->category == 'Dresses' ? 'active' : null }}" href="#">Dresses</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{$item->category == 'Tights' ? 'active' : null }}" href="#">Tights</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{$item->category == 'Leotards' ? 'active' : null }}" href="#">Leotards</a>
        </li>

    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
        </li>
    </ul>
</nav>


