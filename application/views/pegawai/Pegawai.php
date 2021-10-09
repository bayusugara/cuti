<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Pegawai</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Data Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Data</strong> Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nik</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                  <th>No HP</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($pegawai as $u) { ?>
                    <tr>
                        <td style="text-align: center;"><?=$no++?></td>
                        <td style="text-align: center;"><span class="label label-danger label-form"><?=$u->nik?></span></td>
                        <td><?=$u->nama?></td>
                        <td><?=$u->jabatan?></td>
                        <td><?=$u->status?></td>
                        <td><?=$u->nohp?></td>
                        <td style="text-align: center;">
                        <a href="<?=base_url('pegawai/pegawai/detailpegawai/'.$u->nik);?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Lihat"></span></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
</div>