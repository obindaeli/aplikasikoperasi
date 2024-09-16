<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Koperasi</title></head><body>
    <table align="center" >
        <?php foreach ($cetak as $detail) :?>
        <tr align="center">
            <td width="100%"><b><?php echo $detail->nama_koperasi; ?></b></td>
        </tr>
        <tr align="center">
            <td width="100%" ><?php echo "Alamat : ".$detail->alamat;echo " Desa ".$detail->nama_desa;echo " Kecamatan ".$detail->nama_kecamatan; ?></td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td width="100%"></td>
        </tr>
        <?php endforeach; ?>
    </table><br><br><br>
    <table  width="100%" class="docs">
        
        <tr><th align="left" colspan="2">Data Koperasi <br></th></tr>
        
        <?php
                foreach ($cetak as $data) :?>
            <tr>
            <td width="5%"></td>
                <td align="left" width="30%">Ketua Koperasi</td>
                <td width="1%">:</td>
                <td width="65%"><?php echo $detail->ketua; ?></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Sekretaris Koperasi</td>
                <td>:</td>
                <td><?php echo $detail->sekretaris; ?></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Bendahara Koperasi</td>
                <td>:</td>
                <td><?php echo $detail->bendahara; ?></td></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Pengawas Koperasi</td>
                <td>:</td>
                <td><?php echo $detail->pengawas; ?></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Jumlah Anggota</td>
                <td>:</td>
                <td><?php echo $detail->jumlah_anggota; ?></td>
            </tr>
    <?php endforeach; ?>
  </table><br><br>
    <table  width="100%" class="docs">
        <tr><th align="left" colspan="2">Data Rapat Anggota Tetap <br></th></tr>
        <?php
                foreach ($cetak as $data) :?>
            <tr>
            <td width="5%"></td>
                <td align="left" width="30%">Tahun RAT</td>
                <td width="1%">:</td>
                <td width="65%"><?php echo $detail->tahun_rat; ?></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Modal Koperasi</td>
                <td>:</td>
                <td><?php echo $detail->modal_koperasi; ?></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Volume Usaha</td>
                <td>:</td>
                <td><?php echo $detail->volume_usaha; ?></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Sisa Hasil</td>
                <td>:</td>
                <td><?php echo $detail->sisa_hasil; ?></td></td>
            </tr>
            <tr>
            <td width="5%"></td>
                <td align="left">Aset Koperasi</td>
                <td>:</td>
                <td><?php echo $detail->aset; ?></td>
            </tr>
          
    <?php endforeach; ?>
  </table><br><br><br><br>

  <table  width="100%" class="docs">
        <tr><th align="center" colspan="3">PENGURUS <?php echo " ".$detail->nama_koperasi; ?></th></tr>
        <tr><td align="center" height="2%"></td></tr>
            <tr>
                <td align="center" width="30%">Ketua</td>
                <td align="center" width="30%">Sekretaris</td>
                <td align="center" width="30%">Bendahara</td>
            </tr>
            <tr><td align="center" height="10%"></td></tr>
        <?php
                foreach ($cetak as $data) :?>
                    <tr>
                        <td align="center" width="30%"><?php echo $detail->ketua; ?></td>
                        <td align="center" width="30%"><?php echo $detail->sekretaris; ?></td>
                        <td align="center" width="30%"><?php echo $detail->bendahara; ?></td>
                    </tr>
                <?php endforeach; ?>
  </table><br><br>

</body></html>