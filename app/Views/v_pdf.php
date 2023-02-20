<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>ID TRANSAKSI</th>
                <th>NAMA PELANGGAN</th>
                <th>TANGGAL</th>
                <th>JUMLAH PESANAN</th>
                <th>TOTAL HARGA</th>
                <th>TOTAL BAYAR</th>
                <th>KEMBALIAN</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($transaksi as $data):
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['id_transaksi']?></td>
                <td><?= $data['nama_pelanggan']?></td>
                <td><?php echo date('d/m/Y h:i:s', strtotime($data['tanggal_transaksi']))?></td>
                <td><?= $data['jml_pesanan']?></td>
                <td><?= $data['total_harga_seluruh']?></td>
                <td><?= $data['jml_bayar']?></td>
                <td><?= $data['jml_kembalian']?></td>
            </tr>
            <?php $no++; endforeach;  ?>
        </tbody>
        <tfoot>
            <!-- <td>Total pemasukkan :  <?php //echo $data['SUM(total_harga_seluruh)'];?></td> -->
        </tfoot>
    </table>
</body>
</html>