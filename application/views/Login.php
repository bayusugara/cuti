<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cuti | Login</title>
  <link rel="icon" href="<?= base_url();?>assets/logo.png" type="image/x-icon" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
      body {
        /*background-image:url(<?php echo base_url('assets/lambang.png')?>); 
        background-size:cover;*/
        background: #453234;
      }
      .login-page { 
        width: 400px; 
        margin: 80px auto; 
      }
      .form { 
        z-index: 1;
        background:rgba(0,0,0,0.8); 
        max-width: 400px; 
        padding: 35px; 
        text-align: center; 
      }
      h1,a,p{
        color: #fff;
      }  
      
     </style>
</head>
<body class="hold-transition login-page">
  <div>
      <div class="login-page"> 
        <div class="form">
<div class="login-box">
  <div class="login-box-body">
  <div class="login-logo">
    <center><img src="<?= base_url();?>assets/logo.png" alt="John Doe" width="25%" height="25%" /></center>
    <br>
    <b style="font-family: serif; font-size: 20pt; color: white;">Cuti Pegawai</b>
  </div>
  <!-- /.login-logo -->
    <br><br>
    <p class="login-box-msg"></p>

    <form action="<?= base_url('login/do_login');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nik" placeholder="NIK / NIP" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br><br><br>
  </div>
  <!-- /.login-box-body -->
</div>
</div>
</div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
