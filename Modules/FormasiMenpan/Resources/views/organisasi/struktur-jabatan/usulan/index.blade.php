@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('fm-org-struktur-jabatan-usulan.export') }}" class="dropdown-item">
                                    <i class="fas fa-download me-2"></i>
                                    Export
                                </a>
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalImport">
                                    <i class="fas fa-upload me-2"></i>
                                    Import
                                </button>
                                <a href="{{ route('fm-org-struktur-jabatan-usulan.kirim-usulan') }}" class="dropdown-item btn-kirim-usulan">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Kirim Usulan
                                </a>
                                <a href="{{ route('fm-org-struktur-jabatan-usulan.hapus-usulan') }}" class="dropdown-item btn-update">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    Hapus Usulan
                                </a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="bookmark"></i>Unit Kerja - Usulan</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>No</th>
                                <th>Parent No</th>
                                <th>Nama Jabatan</th>
                                <th>Unit Kerja ID</th>
                                <th>Status Usulan</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.modal-import', [
    "formAction" => route('fm-org-struktur-jabatan-usulan.import'),
    "modalTitle" => "Import Data",
])
@endsection
@include('components.datatables')
@include('components.loading')
@include('components.select2')
@push('script')
<script>
    $(document).ready(function () {
        let dataTable = $('#dataTable').DataTable({
            ajax: "{{ route('fm-org-struktur-jabatan-usulan.datatable') }}",
            columns: [
                {data: 'nomor', name: 'nomor', className:'text-nowrap text-center w-5'},
                {data: 'parent_nomor', name: 'parent_nomor', className:'text-nowrap text-center w-5'},
                {data: 'nama_jabatan', name: 'nama_jabatan'},
                {data: 'unit_kerja_id', name: 'unit_kerja_id'},
                {data: 'status_usulan', name: 'status_usulan', className:'text-nowrap w-5'},
            ],
        })
        
        new $.fn.dataTable.FixedHeader( dataTable );
    });
</script>
@endpush