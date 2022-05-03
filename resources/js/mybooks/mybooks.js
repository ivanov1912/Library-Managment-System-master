$(function ($) {
    $(document).on("change", "#flag_id", function (e) {
        let value = $(this).val();
        let dataId = $.parseJSON($(this).attr('data-id'));
        $.ajax({
            method: "post",
            url: STATUSFAVOUTITE.replace(":id", dataId),
            data: { 'flag_id': value },
            success: function (data) {
                toastr.success('Successfully updated book status!')
            },
            error: function (errors) {
                toastr.danger('Unsuccessfully updated book status!')
            },
        });
    });


    $("#mybooks").DataTable();
});
