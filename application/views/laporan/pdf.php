<h1>Laporan Laundry Wahyu</h1>

<table border='1' cellpadding="10" class="table table.bordered table.striped">
    <thead>
        <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Paket</th>
        <th>Outlet</th>
        <th>Harga</th>
        <th>Terjual</th>
        <th>Pendapatan</th>
        <th>Status Pembayaran</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $total = 0;
    $index=1; foreach ($laporan as $row): ?>
        <tr>
            <td><?= $index++ ?></td>
            <td><?= $row['tgl'] ?></td>
            <td><?= $row['nama_paket'] ?></td>
            <td><?= $row['nama_outlet'] ?></td>
            <td><?= "Rp." . number_format($row['harga']) ?></td>
            <td><?= $row['terjual'] ?></td>
            <td><?= "Rp." . number_format($row['pendapatan']) ?></td>
            <td><?= $row['dibayar'] ?></td>
        </tr>
        <?php $total += $row['pendapatan'] ?>
    <?php endforeach; ?>
    <tr>
        <td colspan="6">Total</td>
        <td>Rp. <?= number_format($total) ?></td>
    </tr>
    </tbody>
</table>