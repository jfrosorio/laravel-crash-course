<ul class="navbar-nav mr-auto">
    @foreach($menuItems as $menuItem)
        <li class="nav-item active">
            <a class="nav-link" href="{{ $menuItem['link'] }}">{{ $menuItem['name'] }}</a>
        </li>
    @endforeach
</ul>
