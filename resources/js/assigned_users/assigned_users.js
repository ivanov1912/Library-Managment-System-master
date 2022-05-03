$(function($) {
    $('#assigned-users').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "0%", "targets": 0 },
            { "width": "5%","targets": 1 },
            { "width": "5%","targets": 2 },
            { "width": "5%","targets": 3 },
            { "width": "5%","targets": 4 },
            { "width": "5%","targets": 5 },
            { "width": "5%","targets": 6 },
            { "width": "9%","targets": 7 },
            { "width": "8%","targets": 8 },
            { "width": "8%","targets": 9 },
          ]
    });
})