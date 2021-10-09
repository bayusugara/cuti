<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Pegawai</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Detail Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
                    <!-- /.box-body -->
<?php foreach ($pegawai as $u) { ?>
    <a class="btn btn-warning" href="<?= base_url('kasubbag/pegawai');?>">Cancel </a>
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"><strong>Detail :</strong> <?=$u->nama;?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row" style="font-size: 13pt;">
      <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-5">Nik</label><label>: <span class="label label-danger label-form"><?=$u->nik;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Nama</label><label>: <span class="label label-primary label-form"><?=$u->nama;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Jenis Kelamin</label><label>: <span class="label label-primary label-form"><?php if ($u->jeniskelamin == "L"){echo"Laki-Laki";}else{echo"Perempuan";}?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Jabatan</label><label>: <span class="label label-primary label-form"><?=$u->jabatan;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Tanggal Lahir</label><label>: <span class="label label-primary label-form"><?=$u->tanggallahir;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">pendidikan</label><label>: <span class="label label-primary label-form"><?=$u->pendidikan;?> </span></label>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-5">Agama</label><label>: <span class="label label-primary label-form"><?=$u->agama;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Status</label><label>: <span class="label label-primary label-form"><?=$u->status;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">No Hp</label><label>: <span class="label label-primary label-form"><?=$u->nohp;?> </span></label>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
</div>
<?php } ?>
        </div>
    </section>
</div>