<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    /* saat mode print */
    @media print{
        @page{
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .btn, footer, a#debug-icon-link{
            display: none;
        }

    }
</style>
<body>
    <?php foreach($transaksi as $data): ?>
    <table>
        <p><?php echo date('d-m-y', strtotime($data['tanggal_transaksi'] ))?></p>
        <thead>
            <tr>
                <th>nama</th>
                <th>quantity</th>
                <th>harga</th>
                <th>total per menu</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($rincian as $detail):
                if($data['id_pesanan'] == $detail['id_pesanan']):
            ?>
            <tr>
                <td><?= $detail['nama_menu']?></td>
                <td><?= $detail['quantity']?></td>
                <td><?= $detail['harga']?></td>
                <td><?= $detail['total_harga_per_menu']?></td>
            </tr>
            <?php  endif; endforeach;  ?>
        </tbody>
        <tfoot>
            <td colspan="4"><b>jumlah pesanan : Rp. <?= $detail['jml_pesanan']?></b></td>
            <td colspan="4"><b>Total : Rp. <?= $detail['total_harga_seluruh']?></b></td>
            <td colspan="4"><b>Bayar : Rp. <?= $data['jml_bayar']?></b></td>
            <td colspan="4"><b>Kembalian : Rp. <?= $data['jml_kembalian']?></b></td>
        </tfoot>
        <?php endforeach ?>
    </table>
    <button type="button" class="btn btn-success" onclick="window.print()">print</button>
</body>
</html>