$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        pageLength: 5,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
