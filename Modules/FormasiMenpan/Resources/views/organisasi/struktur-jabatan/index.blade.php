@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="bookmark"></i>Filter Struktur Jabatan</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select name="filter_opd_id" id="filter_opd_id" class="form-control select2-allowClear" data-placeholder="Unit Kerja">
                            <option></option>
                            @foreach ($opds as $opd)
                            <option value="{{ $opd->id }}">{{ $opd->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('fm-org-struktur-jabatan.download-parent') }}" class="dropdown-item btn-update">
                                    <i class="fas fa-cloud-download-alt me-2"></i>
                                    Download Parent
                                </a>
                                <a href="{{ route('fm-org-struktur-jabatan.export') }}" class="dropdown-item" target="_blank">
                                    <i class="fas fa-file-export me-2"></i>
                                    Export
                                </a>
                                <a href="{{ route('fm-org-struktur-jabatan-usulan.index') }}" class="dropdown-item">
                                    <i class="fas fa-book-reader me-2"></i>
                                    Usulan
                                </a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="bookmark"></i>Struktur Jabatan</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Kode</th>
                                <th>Nama Jabatan</th>
                                <th>Posisi</th>
                                <th>ABK</th>
                                <th>Kelas</th>
                                <th>###</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('components.datatables')
@include('components.loading')
@include('components.select2')
@push('script')
<script>
    $(document).ready(function () {
        let dataTable = $('#dataTable').DataTable({
            responsive: true,
            ajax: {
                url: "{{ route('fm-org-struktur-jabatan.datatable') }}",
                data: function (d) {
                    d.opd_id = $('#filter_opd_id').val()
                }
            },
            columns: [
            {data: 'kode', name: 'kode', className:'d-none'},
            {data: 'nama', name: 'nama'},
            {data: 'posisi_id', name: 'posisi_id', className:'text-nowrap text-center w-5'},
            {data: 'abk', name: 'abk', className:'text-nowrap text-center w-5'},
            {data: 'kelas', name: 'kelas', className:'text-nowrap text-center w-5'},
            {data: 'action', name: 'action', className:'text-nowrap text-center w-5'},
            ],
        })
        
        new $.fn.dataTable.FixedHeader( dataTable );
        $('#filter_opd_id').change(function(){
            dataTable.draw();
        });
    });
</script>
@endpush