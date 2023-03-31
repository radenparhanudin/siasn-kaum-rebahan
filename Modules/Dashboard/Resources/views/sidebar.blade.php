<li class="sidebar-item {{ set_active(['dashboard.index', 'statistik.index', 'set-token.index']) }}">
    <a data-bs-target="#dashboard" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i data-feather="sliders"></i><span class="align-middle">Dashboard</span>
    </a>
    <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse {{ set_active(['dashboard.index', 'statistik.index', 'set-token.index'], 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active('dashboard.index') }}">
            <a class="sidebar-link" href="{{ route('dashboard.index') }}">Personal</a>
        </li>
        <li class="sidebar-item {{ set_active('statistik.index') }}">
            <a class="sidebar-link" href="{{ route('statistik.index') }}">Statistik</a>
        </li>
        <li class="sidebar-item {{ set_active('set-token.index') }}">
            <a class="sidebar-link" href="{{ route('set-token.index') }}">Set Token</a>
        </li>
    </ul>
</li>