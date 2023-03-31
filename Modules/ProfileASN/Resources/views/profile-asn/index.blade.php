@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="user"></i>Export Data ASN</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile-asn.export') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group mb-3">
                                    <select name="format" class="form-control select2-infinity" data-placeholder="Format">
                                        <option></option>
                                        <option value="csv">CSV</option>
                                        <option value="xlsx">XLSX</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group mb-3">
                                    <select name="kedudukan_hukum_id" class="form-control select2-infinity" data-placeholder="Kedudukan Hukum">
                                        <option></option>
                                        @foreach ($data['kedudukan_hukums'] as $kedudukan_hukum)
                                        <option value="{{ $kedudukan_hukum->id }}">{{ $kedudukan_hukum->nama }} ({{ $kedudukan_hukum->asns_count }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <select name="jenis_jabatan_id" class="form-control select2-infinity" data-placeholder="Jenis Jabatan">
                                        <option></option>
                                        @foreach ($data['jenis_jabatans'] as $jenis_jabatan)
                                        <option value="{{ $jenis_jabatan->id }}">{{ $jenis_jabatan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <select name="agama_id" class="form-control select2-infinity" data-placeholder="Agama">
                                        <option></option>
                                        @foreach ($data['agamas'] as $agama)
                                        <option value="{{ $agama->id }}">{{ $agama->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <select name="tempat_lahir_id" class="form-control select2" data-placeholder="Tempat Lahir">
                                        <option></option>
                                        @foreach ($data['lokasis'] as $lokasi)
                                        <option value="{{ $lokasi->id }}">{{ $lokasi->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <select name="eselon_id" class="form-control select2-infinity" data-placeholder="Eselon">
                                        <option></option>
                                        @foreach ($data['eselons'] as $eselon)
                                        <option value="{{ $eselon->id }}">{{ $eselon->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <select name="golongan_id" class="form-control select2-infinity" data-placeholder="Golongan">
                                        <option></option>
                                        @foreach ($data['golongans'] as $golongan)
                                        <option value="{{ $golongan->id }}">{{ $golongan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <select name="tk_pendidikan_id" class="form-control select2-infinity" data-placeholder="Tingkat Pendidikan">
                                        <option></option>
                                        @foreach ($data['tingkat_pendidikans'] as $tingkat_pendidikan)
                                        <option value="{{ $tingkat_pendidikan->id }}">{{ $tingkat_pendidikan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-outline-dark btn-lg"><i class="fas fa-file-download me-2"></i>Export</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom">
                    @hasanyrole('administrator')
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalPost">
                                    <i class="fas fa-cloud-download-alt me-2"></i>
                                    Download Profile
                                </button>
                                <a href="{{ route('profile-asn.update-referensi') }}" class="dropdown-item btn-update">
                                    <i class="fas fa-sync me-2"></i>
                                    Update Referensi
                                </a>
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalUpdate">
                                    <i class="fas fa-sync me-2"></i>
                                    Update Ulang
                                </button>
                            </div>
                        </div>
                    </div>
                    @endhasanyrole
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="user"></i>Profile ASN</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Nomor HP</th>
                                <th>Kedudukan Hukum</th>
                                <th>Update Terakhir</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.modal-post', [
    "modalSize"  => "modal-sm",
    "formAction" => route('profile-asn.store'),
    "modalTitle" => "Download Profile",
    "modalBody"  => view("profileasn::profile-asn.form"),
])
@include('components.modal-update', [
    "modalSize"  => "modal-sm",
    "formAction" => route('profile-asn.update'),
    "modalTitle" => "Update Ulang",
    "modalBody"  => view("profileasn::profile-asn.form-update", compact('data')),
])
@endsection
@include('components.datatables')
@include('components.loading')
@include('components.select2')
@push('script')
<script>
    $(document).ready(function () {
        let dataTable = $('#dataTable').DataTable({
            responsive: true,
            ajax: "{{ route('profile-asn.datatable') }}",
            columns: [
                {data: 'nip_baru', name: 'nip_baru', className:'text-nowrap', responsivePriority: 1},
                {data: 'nama_lengkap', name: 'nama_lengkap', className:'text-nowrap', responsivePriority: 2},
                {data: 'tempat_lahir', name: 'tempat_lahir.nama', className:'text-nowrap', responsivePriority: 5},
                {data: 'nomor_hp', name: 'nomor_hp', className:'text-nowrap', responsivePriority: 6},
                {data: 'kedudukan_hukum', name: 'kedudukan_hukum.nama', className:'text-nowrap', responsivePriority: 4},
                {data: 'update_terakhir', name: 'update_terakhir', className:'text-nowrap', responsivePriority: 3},
            ],
        })

        new $.fn.dataTable.FixedHeader( dataTable );
    });
</script>
@endpush