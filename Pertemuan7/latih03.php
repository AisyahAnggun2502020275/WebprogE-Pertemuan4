<?php
    // transaksi penjualan produk
    $namaproduk = "Baju Suka Tidur";
    $harga_satuan = 115500;
    $qty = 2;

    // hitung harga yang harus di bayar
    $total_harga = $harga_satuan * $qty;
    $diskon = 0;
    $total_bayar = $total_harga;

    // terdapat diskon 5% jika Sub Total lebih dari 500.000
    if ($total_harga > 500000) {
        $diskon = 0.05 * $total_harga;
        $total_bayar = $total_harga - $diskon;
    }

    echo "<br> Nama Produk : " . $namaproduk;
    echo "<br> Harga Satuan : Rp " . number_format($harga_satuan, 0, ',', '.');
    echo "<br> Jumlah : " . $qty;
    echo "<br> Total Harga : Rp " . number_format($total_harga, 0, ',', '.');
    echo "<br> Diskon : Rp " . number_format($diskon, 0, ',', '.');
    echo "<br> Total Yang Harus Dibayar : Rp " . number_format($total_bayar, 0, ',', '.');
?>
