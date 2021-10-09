<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Cuti Pegawai</h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
      <li class="active">Cuti Pegawai</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="callout callout-warning">
      <h4>PERHATIAN!</h4>

      <p>Harap cetak surat cuti, kemudian memberikan surat kepada pegawai yang bersangkutan.</p>
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
                <h3 class="box-title"><strong>Approved <i class="fa fa-check"></i></strong></h3>

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
                    <th style="text-align: center;">Nik</th>
                    <th style="text-align: center;">Nama Pegawai</th>
                    <th style="text-align: center;">Tanggal</th>
                    <th style="text-align: center;">Mulai Cuti</th>
                    <th style="text-align: center;">Akhir Cuti</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Get</th>
                  </tr>
                  <?php $no = 1;
                  foreach ($approved as $a) { ?>
                    <tr>
                      <td style="text-align: center;"><?= $no++ ?></td>
                      <td style="text-align: center;"><span class="label label-danger label-form"><?= $a->nik; ?></span></td>
                      <td style="text-align: center;"><?= $a->nama; ?></td>
                      <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->tanggal));
                                                      echo $format; ?></td>
                      <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->mulaicuti));
                                                      echo $format; ?></td>
                      <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->akhircuti));
                                                      echo $format; ?></td>
                      <td style="text-align: center;">
                        <span class="label label-success label-form">
                          <span style="font-size: 10pt;">Approved <i class="fa fa-check"></i></span>
                        </span>
                      </td>
                      <td style="text-align: center;">
                        <a href="<?= base_url('tatausaha/cuti/preview/' . $a->idcuti); ?>" class="label label-primary">
                          <span style="font-size: 10pt;">PDF</span>
                        </a>
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