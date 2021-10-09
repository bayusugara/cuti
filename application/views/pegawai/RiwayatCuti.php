<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Riwayat Cuti</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Riwayat Cuti</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="callout callout-danger">
        <h4>Info!</h4>

        <p>Jika sudah disetujui, anda bisa meminta surat bukti persetujuan cuti di bagian tata usaha. Harap hubungi admin pada jam kerja 08:00 - 16:00.</p>
      </div>
                            <!-- /.box-body -->
            <div class="box box-default">
              <div class="box-header with-border">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                      <div class="box box-info box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-minus"></i>
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                              <table class="table table-striped">
                                <tr>
                                  <th style="text-align: center;">No</th>
                                  <th style="text-align: center;">Nip</th>
                                  <th style="text-align: center;">Nama Pegawai</th>
                                  <th style="text-align: center;">Tanggal</th>
                                  <th style="text-align: center;">Mulai Cuti</th>
                                  <th style="text-align: center;">Akhir Cuti</th>
                                  <th style="text-align: center;">Jenis Cuti</th>
                                  <th style="text-align: center;">Status</th>
                                </tr>
                            <?php $no =1; foreach($tampil as $a) { ?>
                                <tr>
                                  <td style="text-align: center;"><?=$no++?></td>
                                  <td style="text-align: center;"><span class="label label-danger label-form"><?= $a->nik;?></span></td>
                                  <td style="text-align: center;"><?= $a->nama;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->tanggal )); echo $format;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->mulaicuti )); echo $format;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->akhircuti )); echo $format;?></td>
                                  <td style="text-align: center;"><?= $a->jeniscuti;?></td>
                                  <td style="text-align: center;"><?php if ($a->sttus == '1'){echo'<span style="font-size: 10pt;" class="label label-success label-form">Approved <i class="fa fa-check"></i></span>';}else{echo'<span style="font-size: 10pt;" class="label label-danger label-form">Rejected <i class="fa fa-close"></i></span>';}?>
                                  </td>
                                </tr>
                            <?php } ?>
                              </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
    </section>
</div>