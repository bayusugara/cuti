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
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><strong>Laporan</strong> Pendidikan Pegawai</h3>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTables-export" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nik</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Pendidikan</th>
                  <th>No HP</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($tampilpegawai as $u) { ?>
                    <tr>
                        <td style="text-align: center;"><?=$no++?></td>
                        <td style="text-align: center;"><span class="label label-danger label-form"><?=$u->nik?></span></td>
                        <td><?=$u->nama?></td>
                        <td><?=$u->jabatan?></td>
                        <td><?=$u->pendidikan?></td>
                        <td><?=$u->nohp?></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
</div>