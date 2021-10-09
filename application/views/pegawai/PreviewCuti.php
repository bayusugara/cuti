<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
              <!-- /.box-header -->
              <div class="box-body">
      <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-md-12">
                    <!-------------------------------------------CETAK------------------------------------->
                        <?php foreach($tampil as $a){ ?>
                    <div style="margin: 50px;">
                        <table style="height: 120px; width: 100%;">
                            <tbody>
                                <tr style="height: 30px;">
                                    <td style="width: 60px; height: 60px;"><img style="width: 100%;" src="<?=base_url();?>assets/logo.png" /></td>
                                    <td style="text-align: center; width: 513px; height: 35px;">
                                    <h2 style="line-height: 10px; font-family: Times; font-size: 15pt;">KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA REPUBLIK INDONESIA</h2>
                                    <h2 style="line-height: 10px; font-family: Times; font-size: 15pt;">KANTOR WILAYAH RIAU</h2>
                                    <h2 style="line-height: 10px; font-family: Times; font-size: 15pt;"><b>BALAI PEMASYARAKATAN KELAS II PEKANBARU</b></h2>
                                    <h2 style="line-height: 10px; font-family: Times; font-size: 15pt;">Jalan Chandra dimuka No. 1 Telp . (0761) 65322 – Fax. (0761) 65322</h2>
                                    <h2 style="line-height: 10px; font-family: Times; font-size: 15pt;">Pekanbaru – 28294</h2>
                                    <h2 style="line-height: 10px; font-family: Times; font-size: 15pt;">Email : bapaspku@gmail.com</h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <hr>
                        <div style="margin-left: 50px;">
                            <div style="font-size: 15px;">
                                <p style="font-family: Times; font-size: 15pt; text-align: center;">Surat <?php echo $a->jeniscuti;?><br>
                                    Nomor  : W4.PAS.9.KP.07.01.<?php echo date('His');?>
                                </p><br>

                                <p style="margin-left: 65px;">
                                    Diberikan <?=$a->jeniscuti;?> pada tanggal <?php $format = date('d-m-Y',strtotime($a->tanggal)); echo $format; ?> kepada pegawai negeri sipil : <br><br>
                                    Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?=$a->nama;?>.<br>
                                    Nip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?=$a->nik;?>.<br>
                                    Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?=$a->jabatan;?>.<br>
                                    Satuan kerja &nbsp;&nbsp;&nbsp;: Balai Pemasyarakatan Kelas II Pekanbaru.<br><br>
                                    <?=$a->jeniscuti;?> terhitung tanggal <?php $format = date('d-m-Y',strtotime($a->mulaicuti)); echo $format; ?> s/d <?php $format = date('d-m-Y',strtotime($a->akhircuti)); echo $format; ?>. Dengan ketentuan sebagai berikut:.<br><br>
                                    1.  Sebelum menjalankan <?=$a->jeniscuti;?> tahun 2020 wajib  menyerahkan  pekerjaannya  kepada atasan langsung Kasubsi BKA.<br>
                                    2.  Setelah   selesai   menjalankan  <?=$a->jeniscuti;?> tahun 2020 wajib  melaporkan  diri   kepada   atasan langsung dan bekerja sebagaimana biasanya.<br><br>
                                    Demikianlah surat <?=$a->jeniscuti;?> tahun 2020  ini dibuat untuk dapat dipergunakan sebagaimana mestinya.<br><br>
                                </p>
                            </div>
                        </div><br><br>
                        <br>
                        <div style="padding-left: 2%; font-size: 15px; float: right; width: 30%">
                                <div style="text-align: center;">Pekanbaru, <?php echo date('d-m-Y');?></div>
                                <div style="text-align: center;">Kepala Bapas Pekanbaru</div>
                                <div style="text-align: center;">&nbsp;</div>
                                <div style="text-align: center;">&nbsp;</div>
                                <div style="text-align: center;"><u><b>AMRAN SUARDI,SE,MM</b></u></div>
                        </div>
                    </div>
                    <!-------------------------------------------CETAK------------------------------------->
                    <div class="row">
                        <div class="col-md-10">
                        </div>
                        <div class="col-md-2">
                            <br><br><a class="btn btn-primary" href="<?=base_url('pegawai/cuti/pdf/'.$a->idcuti);?>">GET PDF </a>
                        </div>
                    </div>
                        <?php } ?>
                </div>
                    </div>
                    <!-- /.row -->
                  </div>
                </div>

              </section>
              <!-- /.content -->
            </div>