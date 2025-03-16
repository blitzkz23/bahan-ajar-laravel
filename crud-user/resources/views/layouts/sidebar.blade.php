<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/logodinsos.jpg') }}" alt="Dashboard Logo" class="logo-img">
    </div>
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" 
               class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('panti.index') }}" 
               class="{{ Request::routeIs('panti.*') ? 'active' : '' }}">
                <i class="fas fa-hospital"></i> Panti Sosial
            </a>
        </li>
    </ul>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-button">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>
</div>
