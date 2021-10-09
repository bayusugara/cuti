$(document).ready(function() {
        $(".select2").select2();
        $('.datepicker').datepicker();
        $('#dataTables-example').DataTable({
            responsive: true
        });
        var table= $('#dataTables-export').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                  extend: 'excelHtml5',
                  title: 'Data export laporan <?=$this->uri->segment(3);?> - '+'<?=date('Y-m-d');?>',
                  exportOptions: {
                    columns: ':visible'
                }
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Data export laporan <?=$this->uri->segment(3);?> - '+'<?=date('Y-m-d');?>',
                    exportOptions: {
                    columns: ':visible'
                }
                },
                {
                    extend:'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ],

        } );
        $('.datepicker').datepicker()
        .on('change', function(e) {
            // `e` here contains the extra attributes
            table.draw();
        });
        $('[name="date"]').on('change',function(){
             table.draw();
        });
        // $('#min').keyup( function() { table.draw(); } );
        // $('#max').keyup( function() { table.draw(); } );
        var base_url = '<?=base_url();?>';
        console.log(base_url)
        initValidatorStyle();
    });

    function initValidatorStyle(){
    $.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            }else if (element.hasClass('select2')) {     
                error.insertAfter(element.next('span'));
            }else {
                error.insertAfter(element);
            }
        }
    });
}