$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
    }
});

$('#table1').DataTable();

$('#confirm_delete_dialog').on('show.bs.modal', function(e) {
    let href = $(e.relatedTarget).data('href');
    $(this).find('#btn_delete').click(() => {
        $.ajax({
            type: 'POST',
            data:{
                _method:"DELETE"
            },
            url: href,
            success: () => {
                location.reload(true);
            }
        });
    })
});