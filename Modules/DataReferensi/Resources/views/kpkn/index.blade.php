@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
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
                                    Download KPKN
                                </button>
                            </div>
                        </div>
                    </div>
                    @endhasanyrole
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="airplay"></i>KPKN</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kode</th>
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
    "formAction" => route('kpkn.download'),
    "modalTitle" => "Download KPKN",
    "modalBody"  => view("datareferensi::kpkn.form"),
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
            ajax: "{{ route('kpkn.datatable') }}",
            columns: [
                {data: 'id', name: 'id', className:'text-nowrap', responsivePriority: 2},
                {data: 'nama', name: 'nama', responsivePriority: 1},
                {data: 'kode_cepat', name: 'kode_cepat', className:'text-nowrap', responsivePriority: 3},
            ],
        })
        new $.fn.dataTable.FixedHeader( dataTable );
    });
</script>
@endpush