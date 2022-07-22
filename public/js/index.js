//delete record
$(document).ready(function () {
    $('.delete').click(function () {

        var url = $(this).attr('url');

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                location.href = url;
            } else {

            }
        });
    });
});
