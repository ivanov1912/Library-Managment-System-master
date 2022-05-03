$(function($) {

  $(document).on("change", "#flag_id", function (e) {
    let value = $(this).val();
    let dataId = $.parseJSON($(this).attr('data-id'));
    $.ajax({
        method: "post",
        url: STATUSFAVOUTITE.replace(":id", dataId),
        data: { 'flag_id': value },
        success: function (data) {
            toastr.success('Successfully updated user status!')
        },
        error: function (errors) {
            toastr.danger('Unsuccessfully updated user status!')
        },
    });
});


  $('#userRoles').DataTable({
      "autoWidth": false,
      "columnDefs": [
          { "width": "0%", "targets": 0 },
          { "width": "5%", "targets": 1 },
          { "width": "10%","targets": 2 },
          { "width": "0%","targets": 3 },
          { "width": "7%","targets": 4 },
          { "width": "13%","targets": 5 },
          { "width": "11%","targets": 6 },
          { "width": "6%","targets": 7 },
          { "width": "12%","targets": 8 },
          { "width": "12%","targets": 9 },
          { "width": "5%","targets": 10 },
          { "width": "20%","targets": 11 },
        ]
      });
        
})