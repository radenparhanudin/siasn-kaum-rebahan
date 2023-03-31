@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="airplay"></i>Gaji Pokok</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('gaji-pokok.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="tahun" id="tahun" class="form-control select2" data-placeholder="Tahun">
                                        <option></option>
                                        @foreach (range(date("Y") - 4, date("Y")) as $tahun)
                                        <option value="{{ $tahun }}">{{ $tahun }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-lg">Update Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Golongan</th>
                                <th>Gaji Pokok</th>
                                <th>Tahun</th>
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
            ajax: "{{ route('gaji-pokok.datatable') }}",
            columns: [
                {data: 'golongan', name: 'golongan.nama', className:'text-nowrap', responsivePriority: 1},
                {data: 'gaji_pokok', name: 'gaji_pokok', className:'text-nowrap', responsivePriority: 2},
                {data: 'tahun_buat', name: 'tahun_buat', className:'text-nowrap', responsivePriority: 3},
            ],
        })

        new $.fn.dataTable.FixedHeader( dataTable );
    });
</script>
@endpush