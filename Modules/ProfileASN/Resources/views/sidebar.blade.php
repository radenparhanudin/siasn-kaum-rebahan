@hasanyrole('administrator')
<li class="sidebar-header text-uppercase">Profile ASN</li>
<li class="sidebar-item {{ set_active('profile-asn.index') }}">
    <a class="sidebar-link" href="{{ route('profile-asn.index') }}">
        <i class="align-middle" data-feather="user"></i><span class="align-middle">Profile ASN</span>
    </a>
</li>
@endhasanyrole