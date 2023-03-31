@hasanyrole('administrator')
<li class="sidebar-header text-uppercase">Data Referensi</li>
<li class="sidebar-item {{ set_active(['instansi.index', 'satuan-kerja.index', 'unit-organisasi.index']) }}">
    <a data-bs-target="#datareferensi_unor" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i data-feather="home"></i><span class="align-middle">Unit Organisasi</span>
    </a>
    <ul id="datareferensi_unor" class="sidebar-dropdown list-unstyled collapse {{ set_active(['instansi.index', 'satuan-kerja.index', 'unit-organisasi.index'], 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active('instansi.index') }}">
            <a class="sidebar-link" href="{{ route('instansi.index') }}">Instansi</a>
        </li>
        <li class="sidebar-item {{ set_active('satuan-kerja.index') }}">
            <a class="sidebar-link" href="{{ route('satuan-kerja.index') }}">Satuan Kerja</a>
        </li>
        <li class="sidebar-item {{ set_active('unit-organisasi.index') }}">
            <a class="sidebar-link" href="{{ route('unit-organisasi.index') }}">Unit Organisasi</a>
        </li>
    </ul>
</li>
<li class="sidebar-item {{ set_active(['pendidikan.index', 'tingkat-pendidikan.index']) }}">
    <a data-bs-target="#datareferensi_pendidikan" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i data-feather="award"></i><span class="align-middle">Pendidikan</span>
    </a>
    <ul id="datareferensi_pendidikan" class="sidebar-dropdown list-unstyled collapse {{ set_active(['pendidikan.index', 'tingkat-pendidikan.index'], 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active('pendidikan.index') }}">
            <a class="sidebar-link" href="{{ route('pendidikan.index') }}">Pendidikan</a>
        </li>
        <li class="sidebar-item {{ set_active('tingkat-pendidikan.index') }}">
            <a class="sidebar-link" href="{{ route('tingkat-pendidikan.index') }}">Tingkat Pendidikan</a>
        </li>
    </ul>
</li>
<li class="sidebar-item {{ set_active(['jenis-jabatan.index', 'eselon.index', 'jft.index', 'jfu.index']) }}">
    <a data-bs-target="#datareferensi_jabatan" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i data-feather="feather"></i><span class="align-middle">Jabatan</span>
    </a>
    <ul id="datareferensi_jabatan" class="sidebar-dropdown list-unstyled collapse {{ set_active(['jenis-jabatan.index', 'eselon.index', 'jft.index', 'jfu.index'], 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active('jenis-jabatan.index') }}">
            <a class="sidebar-link" href="{{ route('jenis-jabatan.index') }}">Jenis Jabatan</a>
        </li>
        <li class="sidebar-item {{ set_active('eselon.index') }}">
            <a class="sidebar-link" href="{{ route('eselon.index') }}">Eselon</a>
        </li>
        <li class="sidebar-item {{ set_active('jft.index') }}">
            <a class="sidebar-link" href="{{ route('jft.index') }}">JFT</a>
        </li>
        <li class="sidebar-item {{ set_active('jfu.index') }}">
            <a class="sidebar-link" href="{{ route('jfu.index') }}">JFU</a>
        </li>
    </ul>
</li>
<li class="sidebar-item {{ set_active(['layanan.index', 'sub-layanan.index', 'detail-layanan.index', 'dokumen-usul.index']) }}">
    <a data-bs-target="#datareferensi_layanan" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i class="fas fa-server"></i><span class="align-middle">Layanan</span>
    </a>
    <ul id="datareferensi_layanan" class="sidebar-dropdown list-unstyled collapse {{ set_active(['layanan.index', 'sub-layanan.index', 'detail-layanan.index', 'dokumen-usul.index'], 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active('layanan.index') }}">
            <a class="sidebar-link" href="{{ route('layanan.index') }}">Layanan</a>
        </li>
        <li class="sidebar-item {{ set_active('sub-layanan.index') }}">
            <a class="sidebar-link" href="{{ route('sub-layanan.index') }}">Sub Layanan</a>
        </li>
        <li class="sidebar-item {{ set_active('detail-layanan.index') }}">
            <a class="sidebar-link" href="{{ route('detail-layanan.index') }}">Detail Layanan</a>
        </li>
        <li class="sidebar-item {{ set_active('dokumen-usul.index') }}">
            <a class="sidebar-link" href="{{ route('dokumen-usul.index') }}">Dokumen Usul</a>
        </li>
    </ul>
</li>
<li class="sidebar-item {{ set_active(['jenis-pengadaan.index', 'jenis-formasi.index', 'dokumen-pengadaan.index', 'alasan-tolak-pengadaan.index']) }}">
    <a data-bs-target="#datareferensi_pengadaan" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i class="fas fa-user-tie"></i><span class="align-middle">Pengadaan</span>
    </a>
    <ul id="datareferensi_pengadaan" class="sidebar-dropdown list-unstyled collapse {{ set_active(['jenis-pengadaan.index', 'jenis-formasi.index', 'dokumen-pengadaan.index', 'alasan-tolak-pengadaan.index'], 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active('jenis-pengadaan.index') }}">
            <a class="sidebar-link" href="{{ route('jenis-pengadaan.index') }}">Jenis Pengadaan</a>
        </li>
        <li class="sidebar-item {{ set_active('jenis-formasi.index') }}">
            <a class="sidebar-link" href="{{ route('jenis-formasi.index') }}">Jenis Formasi</a>
        </li>
        <li class="sidebar-item {{ set_active('dokumen-pengadaan.index') }}">
            <a class="sidebar-link" href="{{ route('dokumen-pengadaan.index') }}">Dokumen Pengadaan</a>
        </li>
        <li class="sidebar-item {{ set_active('alasan-tolak-pengadaan.index') }}">
            <a class="sidebar-link" href="{{ route('alasan-tolak-pengadaan.index') }}">Alasan Tolak</a>
        </li>
    </ul>
</li>
<li class="sidebar-item {{ set_active(['lokasi.index', 'kpkn.index', 'golongan.index', 'kedudukan-hukum.index', 'jenis-pegawai.index', 'jenis-kawin.index', 'agama.index', 'status-usulan.index', 'gaji-pokok.index']) }}">
    <a data-bs-target="#datareferensi_lain2" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
        <i data-feather="list"></i><span class="align-middle">Lain-lain</span>
    </a>
    <ul id="datareferensi_lain2" class="sidebar-dropdown list-unstyled collapse {{ set_active(['lokasi.index', 'kpkn.index', 'golongan.index', 'kedudukan-hukum.index', 'jenis-pegawai.index', 'jenis-kawin.index', 'agama.index', 'status-usulan.index', 'gaji-pokok.index'], 'show') }}" data-bs-parent="#sidebar" style="">
        <li class="sidebar-item {{ set_active('lokasi.index') }}">
            <a class="sidebar-link" href="{{ route('lokasi.index') }}">Lokasi</a>
        </li>
        <li class="sidebar-item {{ set_active('kpkn.index') }}">
            <a class="sidebar-link" href="{{ route('kpkn.index') }}">KPKN</a>
        </li>
        <li class="sidebar-item {{ set_active('golongan.index') }}">
            <a class="sidebar-link" href="{{ route('golongan.index') }}">Golongan</a>
        </li>
        <li class="sidebar-item {{ set_active('kedudukan-hukum.index') }}">
            <a class="sidebar-link" href="{{ route('kedudukan-hukum.index') }}">Kedudukan Hukum</a>
        </li>
        <li class="sidebar-item {{ set_active('jenis-pegawai.index') }}">
            <a class="sidebar-link" href="{{ route('jenis-pegawai.index') }}">Jenis Pegawai</a>
        </li>
        <li class="sidebar-item {{ set_active('jenis-kawin.index') }}">
            <a class="sidebar-link" href="{{ route('jenis-kawin.index') }}">Jenis Kawin</a>
        </li>
        <li class="sidebar-item {{ set_active('agama.index') }}">
            <a class="sidebar-link" href="{{ route('agama.index') }}">Agama</a>
        </li>
        <li class="sidebar-item {{ set_active('status-usulan.index') }}">
            <a class="sidebar-link" href="{{ route('status-usulan.index') }}">Status Usulan</a>
        </li>
        <li class="sidebar-item {{ set_active('gaji-pokok.index') }}">
            <a class="sidebar-link" href="{{ route('gaji-pokok.index') }}">Gaji Pokok</a>
        </li>
    </ul>
</li>
@endhasanyrole