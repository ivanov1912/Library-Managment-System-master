$(function($) {
    $('#genres').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "0%", "targets": 0 },
            { "width": "16%","targets": 1 },
            { "width": "35%","targets": 2 },
            { "width": "35%","targets": 3 },
          ]
    });
})