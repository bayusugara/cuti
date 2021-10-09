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
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><strong>Laporan</strong> Cuti Pegawai</h3>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTables-export" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nik</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Mulai Cuti</th>
                  <th>Akhir Cuti</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($tampil as $u) { ?>
                    <tr>
                        <td style="text-align: center;"><?=$no++?></td>
                        <td style="text-align: center;"><span class="label label-danger label-form"><?=$u->nik?></span></td>
                        <td><?=$u->nama?></td>
                        <td><?php $format = date('d-m-Y', strtotime($u->tanggal)); echo $format; ?></td>
                        <td><?php $format = date('d-m-Y', strtotime($u->mulaicuti)); echo $format; ?></td>
                        <td><?php $format = date('d-m-Y', strtotime($u->akhircuti)); echo $format; ?></td>
                        <td><?php if($u->sttus == '1'){echo'<span class="label label-success label-form">Approved</span>';}else{echo'<span class="label label-warning label-form">Pending</span>';}?></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
</div>