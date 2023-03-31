$(document).ready(function(){
    let notyf = new Notyf();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // General
    $('#formPost').on('submit', function (e) {
        e.preventDefault();
        var form, action, method, data;
        form = $('#formPost');
        action = form.attr('action')
        method = form.attr('method')
        data = form.serialize();

        $('.form-control').removeClass('is-invalid')
        $('.invalid-feedback').html('')

        $.ajax({
            type: method,
            url: action,
            data: data,
            beforeSend: function () {
                $('body').loadingModal();
            },
            success: function (res) {
                $('body').loadingModal('destroy');
                $('#dataTable').DataTable().ajax.reload(null, false);
                if (res.status) {
                    $('#modalPost').modal('hide')
                    notyf.success(res.message)
                } else {
                    notyf.error(res.message)
                }
            },
            error: function (xhr) {
                $('body').loadingModal('destroy');
                var res = xhr.responseJSON;
                if(!res.status) {
                    notyf.error(res.message)
                }
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key).addClass('is-invalid')
                        $('#feedback_' + key).html(value[0])
                    });
                }
            }
        });
    })

    $('#modalPost').on('hidden.bs.modal', function (e) {
        $('#formPost').trigger('reset')
        $('#formPost').find('.form-control').removeClass('is-invalid')
        $('#formPost').find('.invalid-feedback').html(null)
        $('#formPost').find('.select2-infinity').val(null).trigger('change')
        $('#formPost').find('.select2').val(null).trigger('change')
    })

    $('#formImport').on('submit', function (e) {
        e.preventDefault();
        var form, action, method, data;
        form = $('#formImport');
        action = form.attr('action')
        method = form.attr('method')
        data = new FormData(form[0]);
    
        $('.form-control').removeClass('is-invalid')
        $('.invalid-feedback').html('')
    
        $.ajax({
            type: method,
            url: action,
            data: data,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $('body').loadingModal();
            },
            success: function (res) {
                $('body').loadingModal('destroy');
                $('#dataTable').DataTable().ajax.reload(null, false);
                if (res.status) {
                    $('#modalImport').modal('hide')
                    notyf.success(res.message)
                } else {
                    notyf.error(res.message)
                }
            },
            error: function (xhr) {
                $('body').loadingModal('destroy');
                var res = xhr.responseJSON;
                if(!res.status) {
                    notyf.error(res.message)
                }
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key).addClass('is-invalid')
                        $('#feedback_' + key).html(value[0])
                    });
                }
            }
        });
    })
    
    $('#modalImport').on('hidden.bs.modal', function (e) {
        $('#formImport').trigger('reset')
        $('#formImport').find('.form-control').removeClass('is-invalid')
        $('#formImport').find('.invalid-feedback').html(null)
        $('#formImport').find('.select2-infinity').val(null).trigger('change')
        $('#formImport').find('.select2').val(null).trigger('change')
    })

    $('#formUpload').on('submit', function (e) {
        e.preventDefault();
        var form, action, method, data;
        form = $('#formUpload');
        action = form.attr('action')
        method = form.attr('method')
        data = new FormData(form[0]);
    
        $('.form-control').removeClass('is-invalid')
        $('.invalid-feedback').html('')
    
        $.ajax({
            type: method,
            url: action,
            data: data,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $('body').loadingModal();
            },
            success: function (res) {
                $('body').loadingModal('destroy');
                $('#dataTable').DataTable().ajax.reload(null, false);
                if (res.status) {
                    $('#modalUpload').modal('hide')
                    notyf.success(res.message)
                } else {
                    notyf.error(res.message)
                }
            },
            error: function (xhr) {
                $('body').loadingModal('destroy');
                var res = xhr.responseJSON;
                if(!res.status) {
                    notyf.error(res.message)
                }
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key).addClass('is-invalid')
                        $('#feedback_' + key).html(value[0])
                    });
                }
            }
        });
    })
    
    $('#modalUpload').on('hidden.bs.modal', function (e) {
        $('#formUpload').trigger('reset')
        $('#formUpload').find('.form-control').removeClass('is-invalid')
        $('#formUpload').find('.invalid-feedback').html(null)
        $('#formUpload').find('.select2-modal-upload').val(null).trigger('change')
    })

    $('#formUpdate').on('submit', function (e) {
        e.preventDefault();
        var form, action, method, data;
        form = $('#formUpdate');
        action = form.attr('action')
        method = form.attr('method')
        data = form.serialize();

        $('.form-control').removeClass('is-invalid')
        $('.invalid-feedback').html('')

        $.ajax({
            type: method,
            url: action,
            data: data,
            beforeSend: function () {
                $('body').loadingModal();
            },
            success: function (res) {
                $('body').loadingModal('destroy');
                $('#dataTable').DataTable().ajax.reload(null, false);
                if (res.status) {
                    $('#modalUpdate').modal('hide')
                    notyf.success(res.message)
                } else {
                    notyf.error(res.message)
                }
            },
            error: function (xhr) {
                $('body').loadingModal('destroy');
                var res = xhr.responseJSON;
                if(!res.status) {
                    notyf.error(res.message)
                }
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key).addClass('is-invalid')
                        $('#feedback_' + key).html(value[0])
                    });
                }
            }
        });
    })

    $('#modalUpdate').on('hidden.bs.modal', function (e) {
        $('#formUpdate').trigger('reset')
        $('#formUpdate').find('.form-control').removeClass('is-invalid')
        $('#formUpdate').find('.invalid-feedback').html(null)
        $('#formUpdate').find('.select2-modal-update').val(null).trigger('change')
    })


    // Tambahan
    $('.btn-update').on('click', function(e){
        e.preventDefault();
        let url = $(this).attr('href');
        $.ajax({
            url: url,
            beforeSend: function () {
                $('body').loadingModal();
            },
            success: function (res) {
                $('body').loadingModal('destroy');
                $('#dataTable').DataTable().ajax.reload(null, false);
                if (res.status) {
                    notyf.success(res.message)
                } else {
                    notyf.error(res.message)
                }
            },
            error: function (xhr) {
                $('body').loadingModal('destroy');
                var res = xhr.responseJSON;
                if(!res.status) {
                    notyf.error(res.message)
                }
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key).addClass('is-invalid')
                        $('#feedback_' + key).html(value[0])
                    });
                }
            }
        });
    })

    $('.btn-kirim-usulan').on('click', function(e){
        e.preventDefault();
        let url = $(this).attr('href');
        $.ajax({
            url: url,
            type: 'POST',
            beforeSend: function () {
                $('body').loadingModal();
            },
            success: function (res) {
                $('body').loadingModal('destroy');
                $('#dataTable').DataTable().ajax.reload(null, false);
                if (res.status) {
                    notyf.success(res.message)
                } else {
                    notyf.error(res.message)
                }
            }
        });
    })
});