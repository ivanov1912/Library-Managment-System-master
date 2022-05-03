$(function($) {

    $('#commentsTable').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "50%", "targets": 0 },
            { "width": "20%","targets": 1 },
            { "width": "20%","targets": 2 },
            { "width": "10%","targets": 3 },
          ]
        });

        $('#commentsUsersTable').DataTable({
            "autoWidth": false,
            "columnDefs": [
                { "width": "50%", "targets": 0 },
                { "width": "10%", "targets": 1 },
                { "width": "10%","targets": 2 },
                { "width": "10%","targets": 3 },
                { "width": "10%","targets": 4 },
              ]
            });
})