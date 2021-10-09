<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data User</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>"><i class="fa fa-dashboard"></i> Cuti</a></li>
        <li class="active">Data User</li>
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
                  <th>Nip</th>
                  <th>Nama</th>
                  <th>Hak Akses</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($user as $u) { ?>
                    <tr>
                        <td style="text-align: center;"><?=$no++?></td>
                        <td><span class="label label-danger label-form"><?=$u->nik?></span></td>
                        <td><?=$u->nama?></span></td>
                        <td><?php if ($u->level == '1'){echo "Tata Usaha";}elseif($u->level == '2'){echo "Pegawai";}elseif($u->level == '3'){echo"Kasubbag";}else{echo"Kabapas";}?></td>
                        <td style="text-align: center;"><a href="#edit<?=$u->idauth;?>" data-toggle="modal"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?=base_url('tatausaha/user/hapus/'.$u->idauth);?>" onclick="return confirm('Anda yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a></td>
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
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah User</h4>
              </div>
              <form id="jvalidate" role="form" class="form-horizontal" action="<?=base_url('tatausaha/user/tambah');?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nik:</label>                                        
                    <div class="col-md-7">
                        <select class="form-control select2" data-live-search="true" id="formGender" name="nik" required">
                            <option value="">Choose option</option>
                            <?php foreach ($pegawai as $key) { ?>
                            <option><?= $key->nik;?> - <?= $key->nama;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>                                        
                    <div class="col-md-7">
                        <input type="password" class="form-control" required="" placeholder="Password" name="password" id="password2"/>
                    </div>
                </div>              
                <div class="form-group">
                  <label class="col-md-3 control-label">Level:</label>
                    <div class="col-md-7">
                      <select class="form-control select2" data-live-search="true" id="formGender" name="level" required">
                        <option value="">Choose option</option>
                        <option value="1">Tata Usaha</option>
                        <option value="2">Pegawai</option>
                        <option value="3">Kasubbag</option>
                        <option value="4">Kabapas</option>
                      </select>
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



                                                   <!-- EDIT -->


<?php foreach($user as $u) { ?>
        <div class="modal modal-success fade" id="edit<?=$u->idauth;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit User</h4>
              </div>
              <form id="jvalidate" role="form" class="form-horizontal" action="<?=base_url('tatausaha/user/update');?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                            <label class="col-md-3 control-label">Nik:</label>  
                            <div class="col-md-7">
                                <input type="hidden" name="idauth" value="<?=$u->idauth;?>" />
                                <input type="number" disabled="disabled" required="" class="form-control" name="nik" value="<?=$u->nik;?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>                                        
                            <div class="col-md-7">
                                <input type="password" required="" class="form-control" name="password" id="password2" placeholder="Password" />
                            </div>
                        </div>              
                        <div class="form-group">
                          <label class="col-md-3 control-label">Level:</label>
                            <div class="col-md-3">
                          <select class="form-control select2" data-live-search="true" id="formGender" name="level" required">
                            <option value="">Choose option</option>
                            <option value="1" <?php if ($u->level == 1) {echo "selected";}?>>Tata Usaha</option>
                            <option value="2" <?php if ($u->level == 2) {echo "selected";}?>>Pegawai</option>
                            <option value="3" <?php if ($u->level == 3) {echo "selected";}?>>Kasubbag</option>
                            <option value="4" <?php if ($u->level == 4) {echo "selected";}?>>Kabapas</option>
                          </select>
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