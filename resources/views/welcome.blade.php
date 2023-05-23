WELCOME

<a href="{{ route('login') }}">LOGIN</a>
<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="bx bx-power-off me-2"></i>
    <span class="align-middle">Log Out</span>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
