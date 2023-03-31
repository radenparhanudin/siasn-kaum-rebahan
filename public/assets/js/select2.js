$(document).ready(function(){
    $('.select2').select2({
        theme: 'bootstrap-5',
        width: '100%'
    });

    $('.select2-allowClear').select2({
        theme: 'bootstrap-5',
        allowClear: true,
        width: '100%'
    });

    $('.select2-infinity').select2({
        theme: 'bootstrap-5',
        minimumResultsForSearch: Infinity,
        width: '100%'
    });

    $('.select2-infinity-modal-post').select2({
        theme: 'bootstrap-5',
        minimumResultsForSearch: Infinity,
        width: '100%'
    });

    $('.select2-modal-update').select2({
        theme: 'bootstrap-5',
        dropdownParent: $('#modalUpdate .modal-content'),
        width: '100%'
    });

})
