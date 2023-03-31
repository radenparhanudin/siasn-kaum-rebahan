@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title fw-bold mb-0 text-dark"><i class="me-2" data-feather="users"></i>User</h5>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>###</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.modal-post', [
    "modalTitle" => "Roles User",
    "modalBody" => view('administrator::user.form', compact('roles')),
    "formAction" => "javascript:void(0)"
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
            ajax: "{{ route('user.datatable') }}",
            columns: [
                {data: 'username', name: 'username', className:'text-nowrap', responsivePriority: 2},
                {data: 'name', name: 'name', className:'text-nowrap', responsivePriority: 1},
                {data: 'roles', name: 'roles.description', className:'text-nowrap', responsivePriority: 4},
                {data: 'action', name: 'action', className:'text-nowrap', responsivePriority: 3},
            ],
        })

        new $.fn.dataTable.FixedHeader( dataTable );
        $('#dataTable').on('click', '.btn-edit', function (event) {
            event.preventDefault();
            $.ajax({
                url: $(this).attr('href'),
                beforeSend: function () {
                    $('body').loadingModal({
                        backgroundColor: 'rgb(62, 142, 247)',
                        animation: 'cubeGrid'
                    });
                },
                success:function (res) {
                    $('body').loadingModal('destroy')
                    if(res.status){
                        $('#formPost').attr({
                            'action' : res.data.action, 
                            'method': 'PUT'
                        })
                        $('#roles').val(res.data.roles).trigger('change')
                        $('#modalPost').modal('show')
                    }else{
                        notyf.error(res.message)
                    }
                }
            })
        });
    });
</script>
@endpush