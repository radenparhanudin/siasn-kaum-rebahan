@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="users"></i>Filter Struktur Jabatan</h5>
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
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="users"></i>NIP Struktur Jabatan</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Kode</th>
                                <th>Nama Jabatan</th>
                                <th>Rill</th>
                                <th>Data ASN</th>
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
                url: "{{ route('fm-kep-nip.datatable') }}",
                data: function (d) {
                    d.opd_id = $('#filter_opd_id').val()
                }
            },
            columns: [
            {data: 'kode', name: 'kode', className:'d-none'},
            {data: 'nama', name: 'nama'},
            {data: 'riil', name: 'riil', className:'text-nowrap text-center w-5'},
            {data: 'data_asns', name: 'fm_nips.nama', className:'text-nowrap'},
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