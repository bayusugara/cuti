<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cuti | Bapas</title>
  <link rel="icon" href="<?= base_url();?>assets/logo.png" type="image/x-icon" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-----------------------------------------------LAPORAN--------------------------------------------->

  <link href="<?=base_url(); ?>assets/plugin/datatables-plugins/buttons.dataTables.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
  <link href="<?=base_url(); ?>assets/plugin/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
  <link href="<?=base_url(); ?>assets/plugin/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

  <!-----------------------------------------------LAPORAN--------------------------------------------->

  <!-- iCheck -->
  <link href="<?php echo base_url();?>assets/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/select2/dist/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?= base_url();?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?= base_url();?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script type="text/javascript"> var base_url = '<?php echo base_url(); ?>'; </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>G</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-family: serif;"><b>CUTI PEGAWAI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?= base_url();?>assets/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url();?>assets/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Kepala Sub Bagian</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url();?>assets/logo.png" class="img-circle" alt="User Image">

                <p>
                  Sistem Informasi Cuti Pegawai
                  <small>Bapas (Balai Permasyarakatan)</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url('kasubbag/datapribadi/profile');?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('login/logout');?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url();?>assets/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama;?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?=base_url();?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('kasubbag/pegawai')?>">
            <i class="fa fa-users"></i> <span>Data Pegawai</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('kasubbag/cuti/pending')?>">
            <i class="fa fa-external-link-square"></i> <span>Cuti Pegawai</span>
            <small class="label pull-right bg-yellow">
              <?php if ($hpending == NULL) {
                  echo "0";
                }else{
                  foreach($hpending as $a){
                    echo $a->jumlah; 
                }
              }?>
              <i class="fa fa-hourglass-start"></i>
            </small>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('kasubbag/laporan/cuti')?>">
            <i class="fa fa-files-o"></i> <span>Laporan Cuti</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?=$contents;?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Sistem Informasi</b> Cuti Pegawai
    </div>
    <strong>Copyright &copy; 2020 <a href="<?= base_url();?>">Bapas (Balai Permasyarakatan)</a>.</strong>  All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url();?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- ChartJS -->
<script src="<?= base_url();?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>assets/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/iCheck/icheck.min.js"></script>

<script type='text/javascript' src='<?= base_url();?>assets/plugin/form-validation/jquery.validate.min.js'></script>


<?php for($i=0;$i<count($scripts);$i++):?>
   <script type='text/javascript' src = '<?=base_url();?>assets/<?=$scripts[$i];?>'></script>
<?php endfor;?>

                    <!-----------------------------------LAPORAN-------------------------------->
<script>
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
</script>

                    <!-----------------------------------LAPORAN-------------------------------->


<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    
    })
</script>

</body>
</html>
