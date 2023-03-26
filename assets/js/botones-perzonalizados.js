const dom = "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
"<'row'<'col-sm-12'tr>>" +
"<'row'<'col-sm-5'i><'col-sm-7'p>>";
const buttons = [
            //Botón para PDF
            {
                extend: 'pdfHtml5',
                download: 'open',
                footer: true,
                text: '<span class="badge bg-danger"><i class="fas fa-file-pdf"></i></span>',
                exportOptions: {
                    columns: [0, ':visible']
                }
            },
           
            {
                extend: 'colvis',
                text: '<span class="badge bg-info"><i class="fas fa-columns"></i></span>',
                postfixButtons: ['colvisRestore']
            }
        ]