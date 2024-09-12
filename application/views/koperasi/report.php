<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Koperasi</title>
</head>
<body>
    <h4 style="text-align: center;">NAMA KOPERASI</h4>
    <h6 style="text-align: center;">ALAMAT</h6>
    <table> <tr>Data Koperasi</tr>
        <tr><td width="30%">Ketua Koperasi</td> <td width="2%">:</td><td><?php echo $detail->ketua ?></td></tr>
        <tr><td width="30%">Sekretaris Koperasi</td> <td width="2%">:</td><td><?php echo $detail->sekretaris ?></td></tr>
        <tr><td width="30%">Bendahara Koperasi</td><td width="2%">:</td><td><?php echo $detail->bendahara ?></td></tr>
        <tr><td width="30%">Pengawas Koperasi</td><td width="2%">:</td><td><?php echo $detail->pengawas ?></td></tr>
        <tr><td width="30%">Jumlah Anggota</td><td width="2%">:</td><td><?php echo $detail->jumlah_anggota ?></td></tr>
    </table>
    <table> <tr>Laporan RAT</tr>
        <tr><td width="30%">Modal Koperasi</td> <td width="2%">:</td><td><?php echo $detail->modal ?></td></tr>
        <tr><td width="30%">Tahun RAT</td> <td width="2%">:</td><td><?php echo $detail->tahun_rat ?></td></tr>
        <tr><td width="30%">Volume Usaha</td><td width="2%">:</td><td><?php echo $detail->volume_usaha ?></td></tr>
        <tr><td width="30%">Sisa Hasil Usaha</td><td width="2%">:</td><td><?php echo $detail->sisa_hasil ?></td></tr>
        <tr><td width="30%">Aset</td><td width="2%">:</td><td><?php echo $detail->aset ?></td></tr>
    </table>
</body>
</html>