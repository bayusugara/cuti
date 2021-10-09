<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Pribadi</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Data Pribadi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
                    <!-- /.box-body -->
<?php foreach ($tampil as $u) { ?>
	<a class="btn btn-success" href="#edit<?=$u->nik;?>" data-toggle="modal">Edit Data Pribadi </a>
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"><strong>Data Pribadi :</strong> <?=$u->nama;?></h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row" style="font-size: 13pt;">
      <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-5">Nik</label><label>: <span class="label label-danger label-form"><?=$u->nik;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Nama</label><label>: <span class="label label-primary label-form"><?=$u->nama;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Jenis Kelamin</label><label>: <span class="label label-primary label-form"><?php if ($u->jeniskelamin == "L"){echo"Laki-Laki";}else{echo"Perempuan";}?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Jabatan</label><label>: <span class="label label-primary label-form"><?=$u->jabatan;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Tanggal Lahir</label><label>: <span class="label label-primary label-form"><?php $format = date('d-m-Y', strtotime($u->tanggallahir )); echo $format;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">pendidikan</label><label>: <span class="label label-primary label-form"><?=$u->pendidikan;?> </span></label>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-5">Agama</label><label>: <span class="label label-primary label-form"><?=$u->agama;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Status</label><label>: <span class="label label-primary label-form"><?=$u->status;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">No Hp</label><label>: <span class="label label-primary label-form"><?=$u->nohp;?> </span></label>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
</div>
<?php } ?>
        </div>
    </section>
</div>




                            <?php foreach($tampil as $u) { ?>
        <div class="modal modal-success fade" id="edit<?=$u->nik;?>">
          <div class="modal-dialog modal-lg ">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Pribadi : <?= $u->nama;?></h4>
              </div>
              <form id="jvalidate" role="form" class="form-horizontal" action="<?=base_url('kasubbag/datapribadi/updatedatapribadi');?>" method="post">
              <div class="modal-body">
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Nip:</label>  
                    <div class="col-md-8">
                        <input type="Number" class="form-control" name="nik" value="<?=$u->nik;?>" readonly required="" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama:</label>                                        
                    <div class="col-md-8">
                        <input type="text" value="<?=$u->nama;?>" class="form-control" name="nama" required="" onkeyup="this.value=this.value.toUpperCase()"/>
                    </div>
                </div>              
                <div class="form-group">
                  <label class="col-md-4 control-label">Jenis Kelamin:</label>
                    <div class="col-md-8">
                        <div class="radio">
                            <label>
                                <input type="radio" name="jk" value="L" required="" <?php if ($u->jeniskelamin == 'L') {echo "checked";}?>>Laki-Laki
                            </label>
                        </div>
                        <div class="radio">
                          <label>
                                <input required="" type="radio" name="jk" value="P" <?php if ($u->jeniskelamin == 'P') {echo "checked";}?>>Perempuan
                          </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Jabatan:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width: 100%;" id="formGender" name="jabatan" required">
                            <option value="">Choose option</option>
                            <option <?php if ($u->jabatan == 'Kabapas'){echo 'selected';}?>>Kabapas</option>
                            <option <?php if ($u->jabatan == 'Pengadministrasian Umum'){echo 'selected';}?>>Pengadministrasian Umum</option>
                            <option <?php if ($u->jabatan == 'Pembimbing Kemasyarakatan Muda'){echo 'selected';}?>>Pembimbing Kemasyarakatan Muda</option>
                            <option <?php if ($u->jabatan == 'Kasubsi Bimbingan Klien Anak'){echo 'selected';}?>>Kasubsi Bimbingan Klien Anak</option>
                            <option <?php if ($u->jabatan == 'Asisten Pembimbing Kemasyarakatan Penyelia'){echo 'selected';}?>>Asisten Pembimbing Kemasyarakatan Penyelia</option>
                            <option <?php if ($u->jabatan == 'Asisten Pembimbing Kemasyarakatan Mahir'){echo 'selected';}?>>Asisten Pembimbing Kemasyarakatan Mahir</option>
                            <option <?php if ($u->jabatan == 'Kepala Urusan Tata Usaha'){echo 'selected';}?>>Kepala Urusan Tata Usaha</option>
                            <option <?php if ($u->jabatan == 'Pengelola Kepegawaian'){echo 'selected';}?>>Pengelola Kepegawaian</option>
                            <option <?php if ($u->jabatan == 'Pembimbing Kemasyarakatan Pertama'){echo 'selected';}?>>Pembimbing Kemasyarakatan Pertama</option>
                            <option <?php if ($u->jabatan == 'Kepala Subseksi Bimbingan Klien Dewasa'){echo 'selected';}?>>Kepala Subseksi Bimbingan Klien Dewasa</option>
                            <option <?php if ($u->jabatan == 'Penelaah Status WBP'){echo 'selected';}?>>Penelaah Status WBP</option>
                            <option <?php if ($u->jabatan == 'Asisten Pembimbing Kemasyarakatan Terampil'){echo 'selected';}?>>Asisten Pembimbing Kemasyarakatan Terampil</option>
                            <option <?php if ($u->jabatan == 'Bendahara'){echo 'selected';}?>>Bendahara</option>
                            <option <?php if ($u->jabatan == 'Pengelola Keuangan'){echo 'selected';}?>>Pengelola Keuangan</option>
                            <option <?php if ($u->jabatan == 'Pengelola BMN'){echo 'selected';}?>>Pengelola BMN</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tanggal Lahir:</label>                                        
                    <div class="col-md-8">
                        <input type="date" required="" class="form-control" value="<?=$u->tanggallahir;?>" name="tanggallahir"/>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">pendidikan:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width:100%;" name="pendidikan" required>
                            <option value="">Choose option</option>
                            <option <?php if ($u->pendidikan == "SMP") {echo"selected";}?>>SMP</option>
                            <option <?php if ($u->pendidikan == "SMK") {echo"selected";}?>>SMK</option>
                            <option <?php if ($u->pendidikan == "SMA") {echo"selected";}?>>SMA</option>
                            <option <?php if ($u->pendidikan == "D3") {echo"selected";}?>>D3</option>
                            <option <?php if ($u->pendidikan == "S1") {echo"selected";}?>>S1</option>
                            <option <?php if ($u->pendidikan == "S2") {echo"selected";}?>>S2</option>
                            <option <?php if ($u->pendidikan == "S3") {echo"selected";}?>>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Agama:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width:100%;" name="agama" required">
                            <option value="">Choose option</option>
                            <option <?php if ($u->agama == "ISLAM") {echo"selected";}?>>ISLAM</option>
                            <option <?php if ($u->agama == "KRISTEN") {echo"selected";}?>>KRISTEN</option>
                            <option <?php if ($u->agama == "HINDU") {echo"selected";}?>>HINDU</option>
                            <option <?php if ($u->agama == "BUDDHA") {echo"selected";}?>>BUDDHA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Status:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width:100%;" name="status" required">
                            <option value="">Choose option</option>
                            <option <?php if ($u->status == "PNS") {echo"selected";}?>>PNS</option>
                            <option <?php if ($u->status == "CPNS") {echo"selected";}?>>CPNS</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No Hp:</label>                                        
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="nohp" required="" value="<?=$u->nohp;?>"/>
                    </div>
                </div>
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
        <?php } ?>