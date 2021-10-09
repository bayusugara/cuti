<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Pengajuan Cuti</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Pengajuan Cuti</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">  
      <div class="callout callout-danger">
        <h4>Info!</h4>

        <p>Jika sudah disetujui, anda bisa mendownload dan mencetak bukti persetujuan cuti. Harap hubungi admin pada jam kerja 08:00 - 16:00 jika cuti anda belum disetujui.</p>
      </div>
      <?php if ($logika->num_rows() > 0) { ?>
        <div class="callout callout-warning">
          <h4>Warning!</h4>

          <p>Maaf anda tidak bisa mengajukan cuti untuk saat ini, harap hapus pengajuan sebelumnya yang belum disetujui.</p>
        </div>
      <?php } ?>
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
                          <?php if ($logika->num_rows() > 0) { ?>
                            <i class="fa fa-minus"></i>
                          <?php }else{ ?>
                          <a class="btn btn-primary" href="#tambah" data-toggle="modal">Ajukan Cuti </a>
                          <?php } ?>
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
                                  <th style="text-align: center;">Keterangan</th>
                                  <th style="text-align: center;">Status</th>
                                  <th style="text-align: center;">Get</th>
                                  <th style="text-align: center;">Aksi</th>
                                </tr>
                            <?php $no =1; foreach($tampil as $a) { ?>
                                <tr>
                                  <td style="text-align: center;"><?=$no++?></td>
                                  <td style="text-align: center;"><span class="label label-danger label-form"><?= $a->nik;?></span></td>
                                  <td style="text-align: center;"><?= $a->nama;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->tanggal )); echo $format;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->mulaicuti )); echo $format;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->akhircuti )); echo $format;?></td>
                                  <td style="text-align: center;"><?= $a->keterangan;?></td>
                                  <td style="text-align: center;"><?php if ($a->sttus == '0') {echo'<span style="font-size: 10pt;" class="label label-warning label-form">Pending <i class="fa fa-hourglass-start"></i></span>';}elseif($a->sttus == '1'){echo'<span style="font-size: 10pt;" class="label label-success label-form">Approved <i class="fa fa-check"></i></span>';}else{echo'<span style="font-size: 10pt;" class="label label-danger label-form">Rejected <i class="fa fa-close"></i></span>';}?>
                                  </td>
                                    <td style="text-align: center;">
                                      <?php if ($a->sttus == '1') { ?>
                                        <a href="<?=base_url('pegawai/cuti/preview/'.$a->idcuti);?>" class="label label-primary">
                                            <span style="font-size: 10pt;">PDF</span>
                                        </a>
                                      <?php }else{ ?>
                                        <i class="fa fa-minus"></i>
                                      <?php } ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php if ($a->sttus != '1') { ?>
                                        <a href="<?=base_url('pegawai/cuti/hapus/'.$a->idcuti);?>" onclick="return confirm('Anda yakin?')">
                                          <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span>
                                        </a>
                                      <?php }else{ ?>
                                        <i class="fa fa-minus"></i>
                                      <?php } ?>
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






                                                            <!-- TAMBAH -->



<div class="modal modal-primary fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ajukan Cuti</h4>
      </div>
      <form id="jvalidate" role="form" class="form-horizontal" action="<?=base_url('pegawai/cuti/tambah');?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Nik:</label>                                        
            <div class="col-md-7">
                <input type="number" class="form-control" disabled="" name="nik" value="<?=$nik;?>" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Tanggal:</label>                                        
            <div class="col-md-7">
                <input type="text" value="<?=date('d/m/Y');?>" class="form-control" disabled="" name="tanggal" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Jenis Cuti:</label>                                        
            <div class="col-md-7">
                <select class="form-control select2" data-live-search="true" style="width:100%;" name="jenis" required">
                    <option value="">Choose option</option>
                    <option >Cuti Tahunan</option>
                    <option >Cuti Besar</option>
                    <option >Cuti Sakit</option>
                    <option >Cuti Melahirkan</option>
                    <option >Cuti Karena Alasan Penting</option>
                    <option >Cuti di Luar Tanggungan Negara</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Mulai Cuti:</label>                                        
            <div class="col-md-7">
                <input type="date" class="form-control" required="" name="mulaicuti" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Akhir Cuti:</label>                                        
            <div class="col-md-7">
                <input type="date" class="form-control" required="" name="akhircuti" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Keterangan/Alasan:</label>                                        
            <div class="col-md-7">
                <textarea placeholder="Keterangan/Alasan" class="form-control" name="keterangan" required="" ></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline">Save</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->