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
                                <a href="{{ route('dokumen-usul.update') }}" class="dropdown-item btn-update">
                                    <i class="fas fa-sync me-2"></i>
                                    Update Data
                                </a>
                            </div>
                        </div>
                    </div>
                    @endhasanyrole
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="airplay"></i>Dokumen Usul</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>ID</th>
                                <th>Dokumen</th>
                                <th>Tipe File</th>
                                <th>Detail Layanan</th>
                                <th>Sub Layanan</th>
                                <th>Layanan</th>
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
            ajax: "{{ route('dokumen-usul.datatable') }}",
            columns: [
                {data: 'id', name: 'id', className:'text-nowrap', responsivePriority: 1},
                {data: 'document', name: 'document', className:'text-nowrap', responsivePriority: 2},
                {data: 'file_type', name: 'file_type', className:'text-nowrap', responsivePriority: 3},
                {data: 'detail_layanan', name: 'detail_layanan.detail_layanan', className:'text-nowrap', responsivePriority: 4},
                {data: 'sub_layanan', name: 'sub_layanan.sub_layanan', className:'text-nowrap', responsivePriority: 5},
                {data: 'layanan', name: 'layanan.layanan', className:'text-nowrap', responsivePriority: 6},
            ],
        })

        new $.fn.dataTable.FixedHeader( dataTable );
    });
</script>
@endpush