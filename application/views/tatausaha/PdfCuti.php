<?php foreach($tampil as $a){ ?>
        <div style="margin: 50px;">
            <h1 style="text-align: center; font-size: 15px;"><u><b>SURAT IZIN CUTI</b></u></h1>
            <div style="margin-left: 50px;">
                <div style="font-size: 15px;">
                    <p>
                        <b>Perihal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Izin Cuti <?=$a->keterangan;?></b><br><br>
                        Kepada Yth.<br><br>
                        <b><u>Pimpinan Pondok Pesantren Dar-El Hikmah Pekanbaru</u></b><br><br>
                        <b><u>Cq. Kabid Pendidikan dan Pengajaran</u></b><br><br>
                    </p>

                    <p style="margin-left: 65px;">
                        Di -<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Tempat</u><br><br>
                        <i>Assalamu'alaikum Wr.Wb.</i><br><br>
                        Puji Syukur kehadirat Allah SWT yang senantiasa memberikan karunia-nya berupa nikmat kesehatan dan iman kepada kita semua. Sholawat dan salam kita kirimkan kepada Nabiyyuna Muhammad SAW semoga kita semua mendapat syafa'at dari beliau di yaumil akhir kelak.<br><br>
                        Hormat saya kepada Pimpinan Pondok semoga Bapak selalu dalam naungan dan kasih sayang Allah SWT aamiin. Selanjutnya bahwa saya yang bertanda tangan dibawah ini :<br><br>

                        Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?=$a->nama;?>.<br>
                        Tempat/Tanggal Lahir &nbsp;&nbsp;&nbsp;&nbsp;: <?= $a->lahir;?>.<br>
                        Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $a->jabatan;?><br><br>
                        Dengan ini mengajukan permohonan izin cuti <?=$a->keterangan;?> mulai tanggal <?php $format = date('d-m-Y', strtotime($a->mulaicuti)); echo $format;?> s/d <?php $format = date('d-m-Y', strtotime($a->akhircuti)); echo $format;?>. Besar harapan saya agar bapak dapat menerima permohonan cuti saya.<br><br>
                        Demikian surat permohonan ini saya buat, atas perhatian dan maklumat dari bapak saya ucapkan terima kasih.<br><br>
                        <i>Wassalamu'alaikum Wr.Wb.</i>
                    </p>
                </div>
            </div><br><br><br><br><br><br><br><br>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div style="padding-left: 2%; font-size: 15px; float: right; width: 30%">
                    <div style="text-align: center;">Pekanbaru, <?php $format = date('d-m-Y', strtotime($a->tanggal)); echo $format;?></div>
                    <div style="text-align: center;">Pemohon,</div>
                    <div style="text-align: center;">&nbsp;</div>
                    <div style="text-align: center;">&nbsp;</div>
                    <div style="text-align: center;"><u><b><?=$a->nama;?></b></u></div>
            </div>
        </div>
        <!-------------------------------------------CETAK------------------------------------->
<?php } ?>