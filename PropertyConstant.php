<?php

class product {

    //property
    public string $kode;
    public string $nama;
    public int $Harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

   }

    //object
    $produk = new product();
    $produk->kode = 'P000';
    $produk->nama = 'Laptop';
    $produk->Harga = 10000000;
    $produk->Stok = 5;

    //hitung pajak
    $Pajak = product::PAJAK * 100; // 11
    $jumlahpajak = $produk->Harga * product::PAJAK; //1,1 juta

    //total
    $total = $produk->Harga + $jumlahpajak;

    //hasil
    echo "produk: ". $produk->nama;
    echo "<br/>";

    // Menggunakan number_format untuk Harga
    echo "Harga: Rp. ". number_format($produk->Harga, 0, ',', '.');
    echo "<br/>";

    echo "Stok: ". $produk->Stok;
    echo "<br/>";

    echo "Pajak: ". $Pajak. "%";
    echo "<br/>";

    // Menggunakan number_format untuk total
    echo "Total Harga Setelah Terkena Pajak Menjadi Rp. ". number_format($total, 0, ',', '.');