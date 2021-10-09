<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Laporan</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Laporan Cuti Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <form class="form-horizontal" action="<?=base_url('kasubbag/laporan/laporancuti');?>" method="POST">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Laporan</strong> Cuti Pegawai</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">                                        
                        <label class="col-md-4 col-xs-12 control-label">Dari:</label>
                        <div class="col-md-4 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" required="" class="form-control" name="tglawal"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">                                        
                        <label class="col-md-4 col-xs-12 control-label">Sampai:</label>
                        <div class="col-md-4 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" required="" class="form-control" name="tglakhir"/>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary pull-right" type="submit" value="Cari">
                </div>
            </div>
        </form>
</section>
    <!-- /.content -->
  </div>