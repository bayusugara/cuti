<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Cuti Pegawai</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Cuti Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-warning">
        <h4>PERHATIAN!</h4>

        <p>Sebelum menyetujui cuti pegawai, diharapkan kasubbag untuk melihat detail cuti.</p>
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
                          <h3 class="box-title"><strong>Persetujuan Kasubbag <i class="fa fa-hourglass-start"></i></strong></h3>

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
                                  <th style="text-align: center;">Jenis Cuti</th>
                                  <th style="text-align: center;">Mulai Cuti</th>
                                  <th style="text-align: center;">Akhir Cuti</th>
                                  <th style="text-align: center;"></th>
                                  <th style="text-align: center;"></th>
                                </tr>
                            <?php $no =1; foreach($pending as $a) { ?>
                                <tr>
                                  <td style="text-align: center;"><?=$no++?></td>
                                  <td style="text-align: center;"><span class="label label-danger label-form"><?= $a->nik;?></span></td>
                                  <td style="text-align: center;"><?= $a->nama;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->tanggal )); echo $format;?>
                                  </td>
                                  <td style="text-align: center;"><?= $a->jeniscuti;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->mulaicuti )); echo $format;?></td>
                                  <td style="text-align: center;"><?php $format = date('d-m-Y', strtotime($a->akhircuti )); echo $format;?></td>
                                  <td style="text-align: right;">
                                    <a href="#setuju<?=$a->idcuti;?>" data-toggle="modal">
                                        <span style="font-size: 10pt;" class="label label-success label-form">Setujui <i class="fa fa-check"></i></span>
                                    </a>
                                  </td>
                                  <td style="text-align: left;">
                                    <a href="#tolak<?=$a->idcuti;?>" data-toggle="modal">
                                        <span style="font-size: 10pt;" class="label label-danger label-form">Tolak <i class="fa fa-close"></i></span>
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







<?php foreach($pending as $a) { ?>
        <div class="modal modal-danger fade" id="tolak<?=$a->idcuti;?>">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong>Tolak <i class="fa fa-close"></i></strong></h4>
              </div>
              <form id="jvalidate" role="form" class="form-horizontal" action="<?=base_url('kasubbag/cuti/updatepending');?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <div class="col-md-12">
                    <h4>Apakah anda yakin ingin menolak pengajuan cuti ini ?</h4>
                    <input type="hidden" name="idcuti" value="<?=$a->idcuti;?>">
                    <input type="hidden" name="status" value="2" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Yes</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<?php } ?>







<?php foreach($pending as $a) { ?>
        <div class="modal modal-success fade" id="setuju<?=$a->idcuti;?>">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong>Setujui <i class="fa fa-check"></i></strong></h4>
              </div>
              <form id="jvalidate" role="form" class="form-horizontal" action="<?=base_url('kasubbag/cuti/updatepending');?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <div class="col-md-12">
                    <h4>Apakah anda yakin ingin meneruskan pengajuan cuti ini ?</h4>
                    <input type="hidden" name="idcuti" value="<?=$a->idcuti;?>">
                    <input type="hidden" name="status" value="3" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Yes</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<?php } ?>