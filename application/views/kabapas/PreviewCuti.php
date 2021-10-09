<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Laporan Cuti</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Laporan Cuti</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Laporan</strong> Cuti</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nik</th>
                  <th>Nama</th>
                  <th>Jenis Cuti</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Mulai Cuti</th>
                  <th>Akhir Cuti</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($tampil as $u) { ?>
                    <tr>
                        <td style="text-align: center;"><?=$no++?></td>
                        <td style="text-align: center;"><span class="label label-danger label-form"><?=$u->nik?></span></td>
                        <td><?=$u->nama?></td>
                        <td><?=$u->jeniscuti?></td>
                        <td><?=$u->keterangan?></td>
                        <td><?=$u->tanggal?></td>
                        <td><?=$u->mulaicuti?></td>
                        <td><?=$u->akhircuti?></td>
                        <td><?php if ($u->sttus == '0') {echo'<span style="font-size: 10pt;" class="label label-warning label-form">Pending <i class="fa fa-hourglass-start"></i></span>';}elseif($u->sttus == '1'){echo'<span style="font-size: 10pt;" class="label label-success label-form">Approved <i class="fa fa-check"></i></span>';}elseif($u->sttus == '2'){echo'<span style="font-size: 10pt;" class="label label-danger label-form">Rejected <i class="fa fa-close"></i></span>';}?></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </section>
</div>