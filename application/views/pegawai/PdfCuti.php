<?php foreach($tampil as $a){ ?>
        <div style="margin: 50px;">
            <table style="height: 120px; width: 100%;">
                <tbody>
                    <tr style="height: 30px;">
                        <td style="width: 15%;">
                        	<img style="width: 100%;" src="<?=base_url();?>assets/logo.png" />
                        </td>
                        <td style="width: 80%; height: 35px;">
	                        <h2 style="text-align: center; line-height: 10px; font-family: Times; font-size: 15pt;"><b>YAYASAN NUR IMAN PEKANBARU (YNIP)</b></h2>
	                        <h2 style="text-align: center; line-height: 10px; font-family: Times; font-size: 15pt;"><b>PONDOK PESANTREN DAR EL HIKMAH PEKANBARU</b></h2>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
                <div style="text-align: center; font-size: 10px;"><b>JL. MANYAR SAKTI KM.12 SIMPANG BARU PANAM, PEKANBARU - 28293 TELP (0761) 64775</b></div>
            <hr>
            <div style="margin-left: 50px;">
                <div style="font-size: 15px;">
                    <p>
                        Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 467/PP-DH/C-8/<?php echo date('his');?><br>
                        Lamp<?php echo' ';?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: -,-<br>
                        Hal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><u>PEMBERIAN IZIN CUTI <?php echo $a->keterangan;?></u></b><br><br>
                    </p>

                    <p style="margin-left: 65px;">
                        Kepada Yth&nbsp;:<br>
                        <b>Sdr. <?= $a->nama; ?></b><br>
                        Di -<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Tempat</u><br><br><br><br>
                        <i>Assalamu'alaikum Wr.Wb.</i><br><br>
                        Dengan Hormat,<br>
                        Sehubung dengan permohonan cuti yang saudara/i ajukan tanggal <?php $format = date('d-m-Y',strtotime($a->tanggal)); echo $format; ?> maka dapat diinformasikan kepada saudara/i bahwa :<br><br>
                        1. Permohonan cuti tersebut sudah disetujui, adapun masanya terhitung sejak tanggal <?php $format = date('d-m-Y',strtotime($a->mulaicuti)); echo $format; ?> s/d <?php $format = date('d-m-Y',strtotime($a->akhircuti)); echo $format; ?>.<br>
                        2. Menjelang habis masa cuti, agar segera melaporkan diri selambat-lambatnya sehari sebelum akhir cuti melalui (Keuangan, Urusan Pegawai, Kepsek/Kurikulum dan Kabid Pendidikan & Pengajaran).<br>
                        3. Adapun semua tugas yang bersangkutan Selama Cuti akan dialihkan kepada pegawai lain.<br><br>
                        Demikianlah surat ini disampaikan kepada yang bersangkutan, untuk dapat dimaksudkan dan terima kasih.<br><br>
                        <i>Wassalamu'alaikum Wr.Wb.</i>
                    </p>
                </div>
            </div><br><br>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div style="padding-left: 2%; font-size: 15px; width: 30%">
                    <div style="text-align: center;">Pekanbaru, <?php echo date('d-m-Y');?></div>
                    <div style="text-align: center;">Pimpinan Pondok</div>
                    <div style="text-align: center;">&nbsp;</div>
                    <div style="text-align: center;">&nbsp;</div>
                    <div style="text-align: center;"><u><b>AMRAN SUARDI,SE,MM</b></u></div>
            </div>
        </div>
        <!-------------------------------------------CETAK------------------------------------->
<?php } ?>