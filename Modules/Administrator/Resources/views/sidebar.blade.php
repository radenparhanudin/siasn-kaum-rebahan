@hasrole('administrator')
<li class="sidebar-header text-uppercase">Administrator</li>
<li class="sidebar-item {{ set_active('user.index') }}">
    <a class="sidebar-link" href="{{ route('user.index') }}">
        <i class="align-middle" data-feather="users"></i><span class="align-middle">User</span>
    </a>
</li>
<li class="sidebar-item {{ set_active('siasn-gateway') }}">
    <a class="sidebar-link" href="{{ route('siasn-gateway') }}">
        <i class="align-middle" data-feather="layers"></i><span class="align-middle">SIASN Gateway</span>
    </a>
</li>
@endhasrole