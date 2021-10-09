<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Laporan</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Laporan Pendidikan Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <form class="form-horizontal" action="<?=base_url('tatausaha/laporan/laporanpegawai');?>" method="POST">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Laporan</strong> Pendidikan Pegawai</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                    <label class="col-md-3 control-label">Pilih Pendidikan:</label>                                        
                    <div class="col-md-6">
                        <select class="form-control select2" data-live-search="true" id="formGender" name="status" required">
                            <option value="">Choose option</option>
                            <option>SMP</option>
                            <option>SMK</option>
                            <option>SMA</option>
                            <option>D3</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                    </div><input class="btn btn-primary pull-right" type="submit" value="Cari">
                </div>
            </div>
        </form>
</section>
    <!-- /.content -->
  </div>