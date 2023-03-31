$(document).ready(function(){
    let notyf = new Notyf();

    $.extend( DataTable.ext.classes, {
        sWrapper:      "dataTables_wrapper dt-bootstrap5",
        sFilterInput:  "form-control",
        sLengthSelect: "form-select dt-select2",
    } );
    
    $.extend($.fn.dataTable.defaults, {
		processing: true,
		serverSide: true,
        search: {
            return: true,
        },
		language: {
			search: "_INPUT_",
			searchPlaceholder: "Pencarian . . .",
			lengthMenu: "_MENU_",
		},
        drawCallback: function() {
            $('.dt-select2').select2({
                theme: 'bootstrap-5',
                width: "70px",
                minimumResultsForSearch: Infinity
            });
         }
	});

    $('div.dataTables_length label select').select2()

	$('#dataTable').on('click', '.btn-delete', function (event) {
        event.preventDefault();
        Swal.fire({
            icon: 'warning',
            html: 'Apakah anda yakin menghapus data ini?',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak!',
            backdrop: false,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: $(this).attr('href'),
                    type: 'DELETE',
                    beforeSend: function () {
                        $('body').loadingModal({
                            backgroundColor: 'rgb(62, 142, 247)',
                            animation: 'cubeGrid'
                        });
                    },
                    success: function (res) {
                        $('body').loadingModal('destroy')
                        $('#dataTable').DataTable().ajax.reload(null, false);
                        if(res.status){
                            notyf.success(res.message)
                        }else{
                            notyf.error(res.message)
                        }
                    }
                })
            }
        })
    });
    
    $('#dataTable').on('click', '.btn-download-child', function (event) {
        event.preventDefault();
        Swal.fire({
            icon: 'warning',
            html: 'Download data akan membutuhkan waktu yang cukup lama?',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak!',
            backdrop: false,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: $(this).attr('href'),
                    type: 'GET',
                    beforeSend: function () {
                        $('body').loadingModal({
                            backgroundColor: 'rgb(62, 142, 247)',
                            animation: 'cubeGrid'
                        });
                    },
                    success: function (res) {
                        $('body').loadingModal('destroy')
                        $('#dataTable').DataTable().ajax.reload(null, false);
                        if(res.status){
                            notyf.success(res.message)
                        }else{
                            notyf.error(res.message)
                        }
                    }
                })
            }
        })
    });

    $('#dataTable').on('click', '.btn-download', function (event) {
        event.preventDefault();
        Swal.fire({
            icon: 'warning',
            html: 'Download data akan membutuhkan waktu yang cukup lama?',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak!',
            backdrop: false,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: $(this).attr('href'),
                    type: 'GET',
                    beforeSend: function () {
                        $('body').loadingModal({
                            backgroundColor: 'rgb(62, 142, 247)',
                            animation: 'cubeGrid'
                        });
                    },
                    success: function (res) {
                        $('body').loadingModal('destroy')
                        $('#dataTable').DataTable().ajax.reload(null, false);
                        if(res.status){
                            notyf.success(res.message)
                        }else{
                            notyf.error(res.message)
                        }
                    }
                })
            }
        })
    });

    $('#dataTable').on('click', '.btn-usul', function (event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'POST',
            beforeSend: function () {
                $('body').loadingModal({
                    backgroundColor: 'rgb(62, 142, 247)',
                    animation: 'cubeGrid'
                });
            },
            success: function (res) {
                $('body').loadingModal('destroy')
                $('#dataTable').DataTable().ajax.reload(null, false);
                if(res.status){
                    notyf.success(res.message)
                }else{
                    notyf.error(res.message)
                }
            }
        })
    });
})
