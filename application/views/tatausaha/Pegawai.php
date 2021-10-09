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
              <a class="btn btn-info" href="#tambah" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>Tambah </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nip</th>
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
                            <a href="<?=base_url('tatausaha/pegawai/detailpegawai/'.$u->nik);?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Lihat"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
</div>




                                                      <!-- TAMBAH -->



        <div class="modal modal-info fade" id="tambah">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Pegawai</h4>
              </div>
              <form id="jvalidate" role="form" class="form-horizontal" action="<?=base_url('tatausaha/pegawai/tambah');?>" method="post">
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Nip:</label>  
                    <div class="col-md-8">
                        <input type="Number" class="form-control" placeholder="Nip Pegawai" name="nik" required="" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama:</label>                                        
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama" required="" onkeyup="this.value=this.value.toUpperCase()"/>
                    </div>
                </div>              
                <div class="form-group">
                  <label class="col-md-4 control-label">Jenis Kelamin:</label>
                    <div class="col-md-8">
                        <div class="radio">
                            <label>
                                <input type="radio" name="jk" value="L" required="" >Laki-Laki
                            </label>
                        </div>
                        <div class="radio">
                          <label>
                                <input required="" type="radio" name="jk" value="P" >Perempuan
                          </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Jabatan:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width: 100%;" id="formGender" name="jabatan" required">
                            <option value="">Choose option</option>
                            <?php foreach($jabatan as $p){?>
                            <option><?= $p->jabatan;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tanggal Lahir:</label>                                        
                    <div class="col-md-8">
                        <input type="date" name="tanggallahir" required="" class="form-control" />
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Pendidikan:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width:100%;" name="pendidikan" required>
                            <option value="">Choose option</option>
                            <option>SMP</option>
                            <option>SMK</option>
                            <option>SMA</option>
                            <option>D3</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Agama:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width:100%;" name="agama" required">
                            <option value="">Choose option</option>
                            <option>ISLAM</option>
                            <option>KRISTEN</option>
                            <option>HINDU</option>
                            <option>BUDDHA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Status:</label>                                        
                    <div class="col-md-8">
                        <select class="form-control select2" data-live-search="true" style="width:100%;" name="status" required">
                            <option value="">Choose option</option>
                            <option>PNS</option>
                            <option>CPNS</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No Hp:</label>                                        
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="No HP Pegawai" name="nohp" required=""/>
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