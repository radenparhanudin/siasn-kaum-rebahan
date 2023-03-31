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
                                <button class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalPost">
                                    <i class="fas fa-cloud-download-alt me-2"></i>
                                    Download
                                </button>
                                <a href="{{ route('fm-org-referensi.jft.export') }}" class="dropdown-item">
                                    <i class="fas fa-download me-2"></i>
                                    Export
                                </a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="bookmark"></i>Jabatan Fungsional</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.modal-post', [
    "formAction" => route('fm-org-referensi.jft.download'),
    "modalTitle" => "Download Jabatan",
    "modalBody"  => view("formasimenpan::organisasi.referensi.jft.form"),
])
@endsection
@include('components.datatables')
@include('components.loading')
@include('components.select2')
@push('script')
<script>
    $(document).ready(function () {
        let dataTable = $('#dataTable').DataTable({
            ajax: "{{ route('fm-org-referensi.jft.datatable') }}",
            columns: [
                {data: 'jabatan', name: 'jabatan'},
            ],
        })
        
        new $.fn.dataTable.FixedHeader( dataTable );
    });
</script>
@endpush