$(function($) {
    $('#assigned-authors').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "0%", "targets": 0 },
            { "width": "10%","targets": 1 },
            { "width": "10%","targets": 2 },
            { "width": "10%","targets": 3 },
          ]
    });
})