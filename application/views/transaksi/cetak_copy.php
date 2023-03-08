<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('new_template/') ?>assets/images/Logo1.png" type="image/x-icon">
    <title><?= $title ?></title>
        <style>
            td {
                font-size: 12px;
                font-family: sans-serif;
            }
            h3 {
                font-size: 16px;
            }
            hr {
                border: 0;
                border-top: 2px solid #FF99bb;
            }
            .table {
                border: 1px solid black;
                border-coLLapse: collapse;
            }

            th {
                font-family: sans-serif;
                font-size: 12px;
                background: lightblue;
            }
            </style>
        </head>

        <body>
            <table>
            <tr>
            <td width="400">
                <h3>Laundry Wahyu</h3>
            </td>
            <td>
                <!-- <h3>Invoice</h3> -->
                <img src="<?= base_url('assets/img/logo2.jpg') ?> " width="150">
                </td>
            </tr>
            <!-- <tr>
                <td>Id : <?= $transaksi['id_member'] ?></td>
            </tr>
            <tr>
                <td>Nama : <?= $transaksi['nama_member'] ?></td>
            </tr>
            <tr>
                <td>Alamat : <?= $transaksi['alamat'] ?></td>
            </tr> -->
        </table>
        <hr><br>

        <table width="700" class="tabel">
            <tr>
                <th class="tabel text-center">No</th>
                <th class="tabel text-center">Nama Paket</th>
                <th class="tabel text-center">Harga</th>
                <th class="tabel text-center">Qty</th>
                <th class="tabel text-center">Tanggal Masuk</th>
                <th class="tabel text-center">Nama Pelanggan</th>
                <th class="tabel text-center">Total Bayar</th>
                <th class="tabel text-center">Status Pembayaran</th>
                <th class="tabel text-center">Tanggal Ambil</th>
            </tr>
            <?php $index = 1; ?>

            <?php foreach ($transaksi as $tr):?>
            <tr>
                <td class="tabel"><?= $index++ ?></td>
                <td class="tabel"><?= $tr['nama_paket'] ?></td>
                <td class="tabel"><?= $tr['harga'] ?></td>
                <td class="tabel"><?= $tr['qty'] ?></td>
                <td class="tabel"><?= $tr['tgl'] ?></td>
                <td class="tabel"><?= $tr['nama_member'] ?></td>
                <td class="tabel"><?= "Rp. " . number_format($tr['total_bayar']) ?></td>
                <td class="tabel"><?= $tr['dibayar'] ?></td>
                <td class="tabel"><?= $tr['tgl_bayar'] ?></td>
            </tr>
            <?php endforeach ;?>
            
            </table><br>

            <table>
                <tr>
                <td>Keterangan</td>
            </tr>
            <tr>
                <td>
                <p>1. Pengambilan cucian harus membawa nota</p>
                <p>2. Cuci luntur bukan tanggung jawab kami</p>
                <p>3. Hitung dan periksa sebelum pergi</p>
                <p>4. Klaim kekurangan/kehilangan cucian setelah meninggalkan laundry tidak dilayani</p>
            </td>
        </tr>
    </table>

</body>
</html>
<script>
    window.print();
</script>