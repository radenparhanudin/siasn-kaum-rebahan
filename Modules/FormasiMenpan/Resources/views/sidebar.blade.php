@hasanyrole('formasimenpan')
@php
    $formasimenpan_organisasi_referensi = ['fm-org-referensi.unit-kerja.index', 'fm-org-referensi.unit-kerja-usulan.index', 'fm-org-referensi.kualifikasi-pendidikan.index', 'fm-org-referensi.jfu.index', 'fm-org-referensi.jft.index', 'fm-org-referensi.posisi.index'];
    $other                              = ['fm-org-struktur-jabatan.index', 'fm-org-struktur-jabatan-usulan.index'];
    $formasimenpan_organisasi           = array_merge($formasimenpan_organisasi_referensi, $other);
    $formasimenpan_kepegawaian          = ['fm-kep-nip.index'];
@endphp
<li class="sidebar-header text-uppercase">Formasi MENPAN</li>
<li class="sidebar-item {{ set_active($formasimenpan_organisasi) }}">
    <a data-bs-target="#formasimenpan_organisasi" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i data-feather="bookmark"></i><span class="align-middle">Organisasi</span>
    </a>
    <ul id="formasimenpan_organisasi" class="sidebar-dropdown list-unstyled collapse {{ set_active($formasimenpan_organisasi, 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active(['fm-org-struktur-jabatan.index', 'fm-org-struktur-jabatan-usulan.index']) }}">
            <a class="sidebar-link" href="{{ route('fm-org-struktur-jabatan.index') }}">Struktur Jabatan</a>
        </li>
        <li class="sidebar-item {{ set_active($formasimenpan_organisasi_referensi, 'show') }}">
            <a data-bs-target="#formasimenpan_organisasi_referensi" data-bs-toggle="collapse" class="sidebar-link collapsed">Referensi</a>
            <ul id="formasimenpan_organisasi_referensi" class="sidebar-dropdown list-unstyled collapse {{ set_active($formasimenpan_organisasi_referensi, 'show') }}">
                <li class="sidebar-item {{ set_active(['fm-org-referensi.unit-kerja.index', 'fm-org-referensi.unit-kerja-usulan.index']) }}">
                    <a class="sidebar-link" href="{{ route('fm-org-referensi.unit-kerja.index') }}">Unit Kerja / Kantor</a>
                </li>
                <li class="sidebar-item {{ set_active('fm-org-referensi.kualifikasi-pendidikan.index') }}">
                    <a class="sidebar-link" href="{{ route('fm-org-referensi.kualifikasi-pendidikan.index') }}">Kualifikasi Pendidikan</a>
                </li>
                <li class="sidebar-item {{ set_active('fm-org-referensi.posisi.index') }}">
                    <a class="sidebar-link" href="{{ route('fm-org-referensi.posisi.index') }}">Posisi</a>
                </li>
                <li class="sidebar-item {{ set_active('fm-org-referensi.jfu.index') }}">
                    <a class="sidebar-link" href="{{ route('fm-org-referensi.jfu.index') }}">Jabatan Pelaksana</a>
                </li>
                <li class="sidebar-item {{ set_active('fm-org-referensi.jft.index') }}">
                    <a class="sidebar-link" href="{{ route('fm-org-referensi.jft.index') }}">Jabatan Fungsional</a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li class="sidebar-item {{ set_active($formasimenpan_kepegawaian) }}">
    <a data-bs-target="#formasimenpan_kepegawaian" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i data-feather="users"></i><span class="align-middle">Kepegawaian</span>
    </a>
    <ul id="formasimenpan_kepegawaian" class="sidebar-dropdown list-unstyled collapse {{ set_active($formasimenpan_kepegawaian, 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active(['fm-kep-nip.index']) }}">
            <a class="sidebar-link" href="{{ route('fm-kep-nip.index') }}">Data NIP</a>
        </li>
    </ul>
</li>
@endhasanyrole